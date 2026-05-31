<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        if(!$this->session->userdata('login')){
            redirect('auth');
        }

        $this->load->database();
    }

    public function index()
    {

        // ====================================
        // CARD STATISTIK
        // ====================================

        $data['total_produk'] =
            $this->db->count_all('produk');

        $data['total_pelanggan'] =
            $this->db->count_all('pelanggan');

        $data['total_order'] =
            $this->db->count_all('sales_order');

        $this->db->select_sum('total_harga');

        $pendapatan =
            $this->db->get('sales_order')->row();

        $data['total_pendapatan'] =
            $pendapatan->total_harga ?? 0;

        // ====================================
        // PRODUK TERBARU
        // ====================================

        $this->db->order_by(
            'id_produk',
            'DESC'
        );

        $this->db->limit(5);

        $data['produk_terbaru'] =
            $this->db->get('produk')->result();

        // ====================================
        // PELANGGAN TERBARU
        // ====================================

        $this->db->order_by(
            'id_pelanggan',
            'DESC'
        );

        $this->db->limit(5);

        $data['pelanggan_terbaru'] =
            $this->db->get('pelanggan')->result();

        // ====================================
        // ORDER TERBARU
        // ====================================

        $this->db->select("
            sales_order.*,
            pelanggan.nama_pelanggan,
            produk.nama_produk
        ");

        $this->db->from('sales_order');

        $this->db->join(
            'pelanggan',
            'pelanggan.id_pelanggan =
            sales_order.id_pelanggan'
        );

        $this->db->join(
            'produk',
            'produk.id_produk =
            sales_order.id_produk'
        );

        $this->db->order_by(
            'sales_order.id_order',
            'DESC'
        );

        $this->db->limit(5);

        $data['order_terbaru'] =
            $this->db->get()->result();

        // ====================================
        // STATUS ORDER
        // ====================================

        $data['draft'] =
            $this->db
            ->where('status','Draft')
            ->count_all_results('sales_order');

        $data['dikirim'] =
            $this->db
            ->where('status','Dikirim')
            ->count_all_results('sales_order');

        $data['selesai'] =
            $this->db
            ->where('status','Selesai')
            ->count_all_results('sales_order');

        $data['dibatalkan'] =
            $this->db
            ->where('status','Dibatalkan')
            ->count_all_results('sales_order');

        // ====================================
        // PRODUK TERLARIS
        // ====================================

        $this->db->select("
            produk.nama_produk,
            SUM(sales_order.qty) AS total_terjual
        ");

        $this->db->from('sales_order');

        $this->db->join(
            'produk',
            'produk.id_produk =
            sales_order.id_produk'
        );

        $this->db->group_by(
            'produk.id_produk'
        );

        $this->db->order_by(
            'total_terjual',
            'DESC'
        );

        $this->db->limit(5);

        $data['produk_terlaris'] =
            $this->db->get()->result();

        // ====================================
        // PENDAPATAN BULAN INI
        // ====================================

        $this->db->select_sum(
            'total_harga'
        );

        $this->db->where(
            'MONTH(tanggal)',
            date('m')
        );

        $this->db->where(
            'YEAR(tanggal)',
            date('Y')
        );

        $bulan_ini =
            $this->db
            ->get('sales_order')
            ->row();

        $data['pendapatan_bulan_ini'] =
            $bulan_ini->total_harga ?? 0;

        // ====================================
        // LOAD VIEW
        // ====================================

        $this->load->view(
            'templates/header'
        );

        $this->load->view(
            'templates/sidebar'
        );

        $this->load->view(
            'templates/topbar'
        );

        $this->load->view(
            'dashboard/index',
            $data
        );

        $this->load->view(
            'templates/footer'
        );
    }
}
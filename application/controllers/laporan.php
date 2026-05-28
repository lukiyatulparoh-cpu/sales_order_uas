<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        if(!$this->session->userdata('login')){
            redirect('auth');
        }

        $this->load->database();
    }

    // =========================
    // LAPORAN SALES
    // =========================
    public function sales()
    {

        $query = $this->db->query("
            SELECT
                sales.id_sales,
                sales.nama_sales,

                COUNT(orders.id_order) AS jumlah_order,

                SUM(detail_order.qty) AS produk_terjual,

                SUM(detail_order.subtotal) AS total_penjualan

            FROM sales

            LEFT JOIN orders
                ON sales.id_sales = orders.id_sales

            LEFT JOIN detail_order
                ON orders.id_order = detail_order.id_order

            GROUP BY sales.id_sales
        ");

        $data['sales'] = $query->result();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');

        $this->load->view('laporan/sales', $data);

        $this->load->view('templates/footer');
    }



    // =========================
    // LAPORAN PRODUK
    // =========================
    public function produk()
    {

        $query = $this->db->query("
            SELECT

                produk.kode_produk,
                produk.nama_produk,
                produk.harga,

                SUM(detail_order.qty) AS qty_terjual,

                SUM(detail_order.subtotal) AS total_penjualan

            FROM produk

            LEFT JOIN detail_order
                ON produk.id_produk = detail_order.id_produk

            GROUP BY produk.id_produk
        ");

        $data['produk'] = $query->result();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');

        $this->load->view('laporan/produk', $data);

        $this->load->view('templates/footer');
    }



    // =========================
    // LAPORAN PERIODE
    // =========================
    public function periode()
    {

        $tanggal_awal =
            $this->input->get('tanggal_awal');

        $tanggal_akhir =
            $this->input->get('tanggal_akhir');



        $this->db->select("
            orders.kode_order,
            orders.tanggal,

            sales.id_sales,
            sales.nama_sales,

            pelanggan.nama_pelanggan AS pelanggan,

            produk.nama_produk AS produk,

            detail_order.qty,

            detail_order.subtotal AS total,

            orders.status
        ");

        $this->db->from('orders');

        $this->db->join(
            'sales',
            'orders.id_sales = sales.id_sales'
        );

        $this->db->join(
            'pelanggan',
            'orders.id_pelanggan = pelanggan.id_pelanggan'
        );

        $this->db->join(
            'detail_order',
            'orders.id_order = detail_order.id_order'
        );

        $this->db->join(
            'produk',
            'detail_order.id_produk = produk.id_produk'
        );



        // FILTER TANGGAL
        if($tanggal_awal && $tanggal_akhir){

            $this->db->where(
                'orders.tanggal >=',
                $tanggal_awal
            );

            $this->db->where(
                'orders.tanggal <=',
                $tanggal_akhir
            );
        }

        $data['sales'] = $this->db->get()->result();



        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');

        $this->load->view('laporan/periode', $data);

        $this->load->view('templates/footer');
    }
}
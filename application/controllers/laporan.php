
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        if(!$this->session->userdata('login')){
            redirect('login');
        }

        $this->load->database();
    }

    // =========================
    // LAPORAN SALES
    // =========================
    public function sales()
    {
        $id_sales = $this->input->get('id_sales');

        $this->db->select("
            sales.id_sales,
            sales.nama_sales,

            COUNT(sales_order.id_order) AS jumlah_order,

            IFNULL(
                SUM(sales_order.qty),
                0
            ) AS total_qty,

            IFNULL(
                SUM(sales_order.total_harga),
                0
            ) AS total_penjualan
        ");

        $this->db->from('sales');

        $this->db->join(
            'sales_order',
            'sales.id_sales = sales_order.id_sales',
            'left'
        );

        if(!empty($id_sales))
        {
            $this->db->where(
                'sales.id_sales',
                $id_sales
            );
        }

        $this->db->group_by(
            'sales.id_sales'
        );

        $data['sales'] =
            $this->db->get()->result();

        $data['list_sales'] =
            $this->db->get('sales')->result();

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
        $id_produk =
            $this->input->get('id_produk');

        $this->db->select("
            produk.id_produk,
            produk.kode_produk,
            produk.nama_produk,
            produk.harga,
            produk.stok,

            IFNULL(
                SUM(sales_order.qty),
                0
            ) AS qty_terjual,

            IFNULL(
                SUM(sales_order.total_harga),
                0
            ) AS total_penjualan
        ");

        $this->db->from('produk');

        $this->db->join(
            'sales_order',
            'produk.id_produk = sales_order.id_produk',
            'left'
        );

        if(!empty($id_produk))
        {
            $this->db->where(
                'produk.id_produk',
                $id_produk
            );
        }

        $this->db->group_by(
            'produk.id_produk'
        );

        $data['produk'] =
            $this->db->get()->result();

        $data['list_produk'] =
            $this->db->get('produk')->result();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('laporan/produk', $data);
        $this->load->view('templates/footer');
    }

    // =========================
    // LAPORAN PER PERIODE
    // =========================
    public function periode()
    {
        $tanggal_awal =
            $this->input->get('tanggal_awal');

        $tanggal_akhir =
            $this->input->get('tanggal_akhir');

        $this->db->select("
            sales_order.kode_order,
            sales_order.tanggal,

            pelanggan.nama_pelanggan,

            sales.nama_sales,

            produk.nama_produk,

            sales_order.qty,

            sales_order.total_harga,

            sales_order.status
        ");

        $this->db->from('sales_order');

        $this->db->join(
            'pelanggan',
            'pelanggan.id_pelanggan = sales_order.id_pelanggan'
        );

        $this->db->join(
            'sales',
            'sales.id_sales = sales_order.id_sales'
        );

        $this->db->join(
            'produk',
            'produk.id_produk = sales_order.id_produk'
        );

        if(
            !empty($tanggal_awal)
            &&
            !empty($tanggal_akhir)
        )
        {
            $this->db->where(
                'sales_order.tanggal >=',
                $tanggal_awal
            );

            $this->db->where(
                'sales_order.tanggal <=',
                $tanggal_akhir
            );
        }

        $data['laporan'] =
            $this->db->get()->result();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('laporan/periode', $data);
        $this->load->view('templates/footer');
    }
}
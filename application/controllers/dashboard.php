
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        // CEK LOGIN
        if(!$this->session->userdata('login')){
            redirect('auth');
        }

        // LOAD DATABASE
        $this->load->database();
    }

    public function index()
    {

        // TOTAL PRODUK
        $data['total_produk'] =
            $this->db->count_all('produk');



        // TOTAL PELANGGAN
        $data['total_pelanggan'] =
            $this->db->count_all('pelanggan');



        // TOTAL ORDER
        $data['total_order'] =
            $this->db->count_all('sales_order');



        // TOTAL PENDAPATAN
        $this->db->select_sum('total_harga');

        $pendapatan =
            $this->db->get('sales_order')->row();

        $data['total_pendapatan'] =
            $pendapatan->total_harga;



        // ORDER TERBARU
        $this->db->select('
            sales_order.*,
            pelanggan.nama_pelanggan
        ');

        $this->db->from('sales_order');

        $this->db->join(
            'pelanggan',
            'pelanggan.id_pelanggan =
            sales_order.id_pelanggan'
        );

        $this->db->order_by(
            'id_order',
            'DESC'
        );

        $this->db->limit(5);

        $data['order_terbaru'] =
            $this->db->get()->result();



        // LOAD TEMPLATE
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

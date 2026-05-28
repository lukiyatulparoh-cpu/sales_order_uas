
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail_order extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        // cek login
        if(!$this->session->userdata('login')){

            redirect('login');
        }

        $this->load->model('Sales_order_model');
    }

    // ==========================================
    // TAMPIL DATA DETAIL ORDER
    // ==========================================
    public function index()
    {

        // role sales
        if($this->session->userdata('role') == 'sales'){

            // ambil data sales login
            $sales = $this->db
                ->get_where('sales', [
                    'id_user' => $this->session->userdata('id_user')
                ])->row();

            // tampil order milik sales
            $data['detail_order'] =
                $this->Sales_order_model
                ->get_by_sales($sales->id_sales);

        } else {

            // admin / manager lihat semua
            $data['detail_order'] =
                $this->Sales_order_model
                ->get_all();
        }

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');

        $this->load->view(
            'detail_order/index',
            $data
        );

        $this->load->view('templates/footer');
    }

    // ==========================================
    // DETAIL / INVOICE
    // ==========================================
    public function invoice($id)
    {

        $data['invoice'] =
            $this->Sales_order_model
            ->get_detail($id);

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');

        $this->load->view(
            'detail_order/invoice',
            $data
        );

        $this->load->view('templates/footer');
    }

}

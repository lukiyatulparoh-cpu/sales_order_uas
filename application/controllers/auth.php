<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class auth extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->model('auth_model');
        $this->load->library('session');
    }

    public function index()
{
    $data['total_produk'] =
        $this->db->count_all('produk');

    $data['total_pelanggan'] =
        $this->db->count_all('pelanggan');

    $data['total_order'] =
        $this->db->count_all('sales_order');

    $this->db->select_sum('total_harga');
    $penjualan =
        $this->db->get('sales_order')->row();

    $data['total_penjualan'] =
        $penjualan->total_harga;

    $this->load->view(
        'auth/login',
        $data
    );
}

    public function login()
{
    $username = $this->input->post('username');

    // tambahkan md5
    $password = md5(
        $this->input->post('password')
    );

    $user = $this->auth_model->cek_login(
        $username,
        $password
    );

    if($user){

        $data = [
            'id_user'  => $user->id,
            'username' => $user->username,
            'role'     => $user->role,
            'login'    => TRUE
        ];

        $this->session->set_userdata($data);

        $this->auth_model->update_last_login(
            $user->id
        );

        redirect('dashboard');

    } else {

        $this->session->set_flashdata(
            'error',
            'Username atau Password salah!'
        );

        redirect('auth');
    }
}
    

    public function logout()
    {
        $this->session->sess_destroy();

        redirect('auth');
    }
}
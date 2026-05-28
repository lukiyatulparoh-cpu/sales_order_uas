
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        // cek login
        if (!$this->session->userdata('login')){
            redirect('login');
        }

        // load model
        $this->load->model('Produk_model');

        // load form validation
        $this->load->library('form_validation');
    }

    // =========================
    // READ DATA
    // =========================
    public function index()
    {
        $data['produk'] = $this->Produk_model->get_all();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('produk/index', $data);
        $this->load->view('templates/footer');
    }

    // =========================
    // FORM TAMBAH
    // =========================
    
    public function tambah()
    {
        // ambil id terakhir
        $this->db->select_max('id_produk');
        $query = $this->db->get('produk')->row();

        $id_terakhir = $query->id_produk + 1;

        // format jadi PRD01
        $kode_produk = 'PRD' . str_pad($id_terakhir, 2, '0', STR_PAD_LEFT);

        $data['kode_produk'] = $kode_produk;

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('produk/tambah', $data);
        $this->load->view('templates/footer');
    }

    // =========================
    // SIMPAN DATA
    // =========================
    public function simpan()
    {
        $this->form_validation->set_rules('kode_produk', 'Kode Produk', 'required');
        $this->form_validation->set_rules('nama_produk', 'Nama Produk', 'required');
        $this->form_validation->set_rules('harga', 'Harga', 'required');
        $this->form_validation->set_rules('stok', 'Stok', 'required');

        if ($this->form_validation->run() == FALSE) {

            $this->tambah();

        } else {

            $data = [
                'kode_produk' => $this->input->post('kode_produk'),
                'nama_produk' => $this->input->post('nama_produk'),
                'harga' => $this->input->post('harga'),
                'stok' => $this->input->post('stok')
            ];

            $this->Produk_model->insert($data);

            redirect('produk');
        }
    }

    // =========================
    // HAPUS DATA
    // =========================
    public function hapus($id)
    {
        $this->Produk_model->delete($id);

        redirect('produk');
    }

    // =========================
    // FORM EDIT
    // =========================
    public function edit($id)
    {
        $data['produk'] = $this->Produk_model->get_by_id($id);

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('produk/edit', $data);
        $this->load->view('templates/footer');
    }

    // =========================
    // UPDATE DATA
    // =========================
    public function update($id)
    {
        $this->form_validation->set_rules('kode_produk', 'Kode Produk', 'required');
        $this->form_validation->set_rules('nama_produk', 'Nama Produk', 'required');
        $this->form_validation->set_rules('harga', 'Harga', 'required');
        $this->form_validation->set_rules('stok', 'Stok', 'required');

        if ($this->form_validation->run() == FALSE) {

            $this->edit($id);

        } else {

            $data = [
                'kode_produk' => $this->input->post('kode_produk'),
                'nama_produk' => $this->input->post('nama_produk'),
                'harga' => $this->input->post('harga'),
                'stok' => $this->input->post('stok')
            ];

            $this->Produk_model->update($id, $data);

            redirect('produk');
        }
    }

}

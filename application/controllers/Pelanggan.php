
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        if (!$this->session->userdata('login')){
            redirect('login');
        }

        $this->load->model('Pelanggan_model');
        $this->load->library('form_validation');
    }

    // =========================
    // TAMPIL DATA
    // =========================
    public function index()
    {
        $data['pelanggan'] = $this->Pelanggan_model->get_all();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('pelanggan/index', $data);
        $this->load->view('templates/footer');
    }

    // =========================
    // FORM TAMBAH
    // =========================
    public function tambah()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('pelanggan/tambah');
        $this->load->view('templates/footer');
    }

    // =========================
    // SIMPAN DATA
    // =========================
    public function simpan()
    {
        $this->form_validation->set_rules('nama_pelanggan', 'Nama Pelanggan', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('telepon', 'Telepon', 'required');

        if ($this->form_validation->run() == FALSE){

            $this->tambah();

        } else {

            $data = [
                'nama_pelanggan' => $this->input->post('nama_pelanggan'),
                'alamat' => $this->input->post('alamat'),
                'telepon' => $this->input->post('telepon')
            ];

            $this->Pelanggan_model->insert($data);

            redirect('pelanggan');
        }
    }

    // =========================
    // HAPUS DATA
    // =========================
    public function hapus($id)
    {
        $this->Pelanggan_model->delete($id);

        redirect('pelanggan');
    }

    // =========================
    // FORM EDIT
    // =========================
    public function edit($id)
    {
        $data['pelanggan'] = $this->Pelanggan_model->get_by_id($id);

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('pelanggan/edit', $data);
        $this->load->view('templates/footer');
    }

    // =========================
    // UPDATE DATA
    // =========================
    public function update($id)
    {
        $this->form_validation->set_rules('nama_pelanggan', 'Nama Pelanggan', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('telepon', 'Telepon', 'required');

        if ($this->form_validation->run() == FALSE){

            $this->edit($id);

        } else {

            $data = [
                'nama_pelanggan' => $this->input->post('nama_pelanggan'),
                'alamat' => $this->input->post('alamat'),
                'telepon' => $this->input->post('telepon')
            ];

            $this->Pelanggan_model->update($id, $data);

            redirect('pelanggan');
        }
    }

}
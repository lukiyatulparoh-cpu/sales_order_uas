<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class laporan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        if(!$this->session->userdata('login')){
            redirect('login');
        }
    }

    public function peminjaman()
    {
        $bulan= $this->input->get('bulan');

        $this->db->select('peminjaman.*, anggota.nama');
        $this->db->from('peminjaman');
        $this->db->join('anggota', 'anggota.id = peminjaman.anggota_id');

        if($bulan){
            $this->db->where('DATE_FORMAT(tanggal_pinjam,"%Y-%m")=', $bulan);
        }

        $data['data']= $this->db->get()->result();
        $data['bulan']= $bulan;

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('laporan/peminjaman', $data);
        $this->load->view('templates/footer');
    }

    public function buku()
{
    $penulis = $this->input->get('penulis');

    $this->db->select('*');
    $this->db->from('buku');

    if($penulis){
        $this->db->where('penulis', $penulis);
    }

    $data['data'] = $this->db->get()->result();

    $data['penulis'] = $penulis;

    $data['list_penulis'] = $this->db
        ->select('penulis')
        ->distinct()
        ->get('buku')
        ->result();

    $this->load->view('templates/header');
    $this->load->view('templates/sidebar');
    $this->load->view('templates/topbar');
    $this->load->view('laporan/buku', $data);
    $this->load->view('templates/footer');
}
    public function anggota()
    {
        $data['data'] = $this->db->get('anggota')->result();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('laporan/anggota', $data);
        $this->load->view('templates/footer');
    }

    public function kategori()
    {
        $data['data'] = $this->db->get('kategori')->result();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('laporan/kategori', $data);
        $this->load->view('templates/footer');
    }
    public function cetak_buku()
{
    $penulis = $this->input->get('penulis');

    $this->db->from('buku');

    if($penulis){
        $this->db->like('penulis', $penulis);
    }

    $data['data'] = $this->db->get()->result();
    $data['penulis'] = $penulis;

    $this->load->view('laporan/cetak_buku', $data);
}

public function cetak_anggota()
{
    $data['data'] = $this->db->get('anggota')->result();

    $this->load->view('laporan/cetak_anggota', $data);
}

public function cetak_kategori()
{
    $data['data'] = $this->db->get('kategori')->result();

    $this->load->view('laporan/cetak_kategori', $data);
}
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sales_order extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        // cek login
        if (!$this->session->userdata('login')){
            redirect('login');
        }

        $this->load->model('Sales_order_model');

        $this->load->library('form_validation');
    }

    // ==========================================
    // TAMPIL DATA
    // ==========================================
    public function index()
    {

        // role sales
        if($this->session->userdata('role') == 'sales'){

            // ambil data sales berdasarkan user login
            $sales = $this->db
                ->get_where('sales', [
                    'id_user' => $this->session->userdata('id_user')
                ])->row();

            // tampilkan order milik sales login
            $data['sales_order'] =
                $this->Sales_order_model
                ->get_by_sales($sales->id_sales);

        } else {

            // admin & manager lihat semua
            $data['sales_order'] =
                $this->Sales_order_model
                ->get_all();

        }

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');

        $this->load->view(
            'sales_order/index',
            $data
        );

        $this->load->view('templates/footer');
    }

    // ==========================================
    // FORM TAMBAH
    // ==========================================
    public function tambah()
    {

        // hanya sales
        if($this->session->userdata('role') != 'sales'){

            redirect('sales_order');
        }

        // kode otomatis
        $this->db->select_max('id_order');

        $query = $this->db->get('sales_order')->row();

        $id_terakhir = $query->id_order + 1;

        $kode_order = 'ORD' .
            str_pad(
                $id_terakhir,
                3,
                '0',
                STR_PAD_LEFT
            );

        $data['kode_order'] = $kode_order;

        // data pelanggan
        $data['pelanggan'] =
            $this->db->get('pelanggan')->result();

        // data produk
        $data['produk'] =
            $this->db->get('produk')->result();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');

        $this->load->view(
            'sales_order/tambah',
            $data
        );

        $this->load->view('templates/footer');
    }

    
        if($qty > $produk->stok){

            $this->session->set_flashdata(
                'error',
                'Stok tidak mencukupi'
            );

            redirect('sales_order/tambah');
        }
    
    // ==========================================
    // SIMPAN DATA
    // ==========================================
    public function simpan()
    {

        // hanya sales
        if($this->session->userdata('role') != 'sales'){

            redirect('sales_order');
        }

        // validasi
        $this->form_validation->set_rules(
            'id_pelanggan',
            'Pelanggan',
            'required'
        );

        $this->form_validation->set_rules(
            'id_produk',
            'Produk',
            'required'
        );

        $this->form_validation->set_rules(
            'qty',
            'Qty',
            'required|numeric'
        );

        if($this->form_validation->run() == FALSE){

            $this->tambah();

        } else {

            $id_produk =
                $this->input->post('id_produk');

            $qty =
                $this->input->post('qty');

            // ambil data produk
            $produk = $this->db
                            ->get_where(
                                'produk',
                                [
                                    'id_produk' => $id_produk
                                ]
                            )->row();

            // hitung total
            $total = $produk->harga * $qty;

            // kode otomatis
            $this->db->select_max('id_order');

            $query =
                $this->db->get('sales_order')->row();

            $id_terakhir = $query->id_order + 1;

            $kode_order = 'ORD' .
                str_pad(
                    $id_terakhir,
                    3,
                    '0',
                    STR_PAD_LEFT
                );

            // ambil data sales dari user login
            $sales = $this->db
                ->get_where('sales', [
                    'id_user' => $this->session->userdata('id_user')
                ])->row();

            $data = [

                'kode_order' => $kode_order,

                'tanggal' => date('Y-m-d'),

                'id_pelanggan' =>
                    $this->input->post('id_pelanggan'),

                // otomatis ambil sales login
                'id_sales' => $sales->id_sales,

                'id_produk' => $id_produk,

                'qty' => $qty,

                'total_harga' => $total,

                // otomatis draft
                'status' => 'Draft'

            ];

            $this->Sales_order_model->insert($data);
            // kurangi stok produk

                $stok_baru = $produk->stok - $qty;

                $this->db->where(
                    'id_produk',
                    $id_produk
                );

                $this->db->update(
                    'produk',
                    [
                        'stok' => $stok_baru
                    ]
                );

            redirect('sales_order');
        }
    }


// ==========================================
// UPDATE STATUS
// =========================================
public function update_status()
{

    $id_order = $this->input->post('id_order');

    $status = $this->input->post('status');

    $this->db->where(
        'id_order',
        $id_order
    );

    $this->db->update(
        'sales_order',
        [
            'status' => $status
        ]
    );

    redirect('sales_order');
}


    // ==========================================
    // DETAIL ORDER
    // ==========================================
    public function detail($id)
    {

        $data['order'] =
            $this->Sales_order_model
            ->get_detail($id);

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');

        $this->load->view(
            'sales_order/detail',
            $data
        );

        $this->load->view('templates/footer');
    }

    // ==========================================
    // HAPUS DATA
    // ==========================================
    public function hapus($id)
    {

        // hanya admin
        if($this->session->userdata('role') != 'admin'){

            redirect('sales_order');
        }

        $this->Sales_order_model->delete($id);

        redirect('sales_order');
    }

}

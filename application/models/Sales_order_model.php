
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sales_order_model extends CI_Model {

    private $table = 'sales_order';

    // ==========================================
    // TAMPIL SEMUA ORDER
    // ==========================================
    public function get_all()
    {

        $this->db->select('
            sales_order.*,
            pelanggan.nama_pelanggan,
            pelanggan.telepon,
            pelanggan.alamat,
            produk.nama_produk,
            produk.harga,
            sales.nama_sales
        ');

        $this->db->from('sales_order');

        // join pelanggan
        $this->db->join(
            'pelanggan',
            'pelanggan.id_pelanggan = sales_order.id_pelanggan'
        );

        // join produk
        $this->db->join(
            'produk',
            'produk.id_produk = sales_order.id_produk'
        );

        // join sales
        $this->db->join(
            'sales',
            'sales.id_sales = sales_order.id_sales'
        );

        $this->db->order_by(
            'sales_order.id_order',
            'DESC'
        );

        return $this->db->get()->result();
    }

    // ==========================================
    // TAMPIL ORDER BERDASARKAN SALES LOGIN
    // ==========================================
    public function get_by_sales($id_sales)
    {

        $this->db->select('
            sales_order.*,
            pelanggan.nama_pelanggan,
            pelanggan.telepon,
            pelanggan.alamat,
            produk.nama_produk,
            produk.harga,
            sales.nama_sales
        ');

        $this->db->from('sales_order');

        // join pelanggan
        $this->db->join(
            'pelanggan',
            'pelanggan.id_pelanggan = sales_order.id_pelanggan'
        );

        // join produk
        $this->db->join(
            'produk',
            'produk.id_produk = sales_order.id_produk'
        );

        // join sales
        $this->db->join(
            'sales',
            'sales.id_sales = sales_order.id_sales'
        );

        // filter berdasarkan sales login
        $this->db->where(
            'sales_order.id_sales',
            $id_sales
        );

        $this->db->order_by(
            'sales_order.id_order',
            'DESC'
        );

        return $this->db->get()->result();
    }

    // ==========================================
    // DETAIL ORDER
    // ==========================================
    public function get_detail($id)
    {

        $this->db->select('
            sales_order.*,
            pelanggan.nama_pelanggan,
            pelanggan.telepon,
            pelanggan.alamat,
            produk.nama_produk,
            produk.harga,
            sales.nama_sales
        ');

        $this->db->from('sales_order');

        // join pelanggan
        $this->db->join(
            'pelanggan',
            'pelanggan.id_pelanggan = sales_order.id_pelanggan'
        );

        // join produk
        $this->db->join(
            'produk',
            'produk.id_produk = sales_order.id_produk'
        );

        // join sales
        $this->db->join(
            'sales',
            'sales.id_sales = sales_order.id_sales'
        );

        // filter berdasarkan id order
        $this->db->where(
            'sales_order.id_order',
            $id
        );

        return $this->db->get()->row();
    }

    // ==========================================
    // INSERT DATA
    // ==========================================
    public function insert($data)
    {

        return $this->db->insert(
            $this->table,
            $data
        );
    }

    // ==========================================
    // UPDATE STATUS
    // ==========================================
    public function update_status($id, $data)
    {

        $this->db->where(
            'id_order',
            $id
        );

        return $this->db->update(
            $this->table,
            $data
        );
    }

    // ==========================================
    // DELETE DATA
    // ==========================================
    public function delete($id)
    {

        $this->db->where(
            'id_order',
            $id
        );

        return $this->db->delete(
            $this->table
        );
    }

}

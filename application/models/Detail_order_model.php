<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail_order_model extends CI_Model {

    private $table = 'detail_order';

    // ==========================================
    // TAMPIL SEMUA DETAIL ORDER
    // ==========================================
    public function get_all()
    {

        $this->db->select('
            detail_order.*,
            sales_order.kode_order,
            produk.nama_produk,
            produk.harga
        ');

        $this->db->from('detail_order');

        // join sales order
        $this->db->join(
            'sales_order',
            'sales_order.id_order = detail_order.id_order'
        );

        // join produk
        $this->db->join(
            'produk',
            'produk.id_produk = detail_order.id_produk'
        );

        $this->db->order_by(
            'detail_order.id_detail',
            'DESC'
        );

        return $this->db->get()->result();
    }

    // ==========================================
    // TAMPIL BERDASARKAN ORDER
    // ==========================================
    public function get_by_order($id_order)
    {

        $this->db->select('
            detail_order.*,
            sales_order.kode_order,
            produk.nama_produk,
            produk.harga
        ');

        $this->db->from('detail_order');

        // join sales order
        $this->db->join(
            'sales_order',
            'sales_order.id_order = detail_order.id_order'
        );

        // join produk
        $this->db->join(
            'produk',
            'produk.id_produk = detail_order.id_produk'
        );

        // filter order
        $this->db->where(
            'detail_order.id_order',
            $id_order
        );

        return $this->db->get()->result();
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
    // DELETE DATA
    // ==========================================
    public function delete($id)
    {

        $this->db->where(
            'id_detail',
            $id
        );

        return $this->db->delete(
            $this->table
        );
    }

}


<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk_model extends CI_Model {

    private $table = 'produk';

    // ambil semua data
    public function get_all()
    {
        return $this->db->get($this->table)->result();
    }

    // ambil data berdasarkan id
    public function get_by_id($id)
    {
        return $this->db->get_where($this->table, [
            'id_produk' => $id
        ])->row();
    }

    // insert data
    public function insert($data)
    {
        return $this->db->insert($this->table, $data);
    }

    // update data
    public function update($id, $data)
    {
        $this->db->where('id_produk', $id);

        return $this->db->update($this->table, $data);
    }

    // hapus data
    public function delete($id)
    {
        $this->db->where('id_produk', $id);

        return $this->db->delete($this->table);
    }

}


<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class auth_model extends CI_Model {

    public function cek_login($username, $password)
    {
        return $this->db
            ->where('username', $username)
            ->where('password', $password)
            ->get('users')
            ->row();
    }

    public function update_last_login($id)
    {
        $this->db->where('id', $id);

        $this->db->update('users', [
            'last_login' => date('Y-m-d H:i:s')
        ]);
    }
}

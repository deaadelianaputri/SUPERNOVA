<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    // Registrasi user baru
    public function register($data) {
        return $this->db->insert('users', $data);
    }

    // Ambil user berdasarkan email
    public function get_user_by_email($email) {
        $query = $this->db->get_where('users', array('email' => $email));
        return $query->row_array();
    }
}

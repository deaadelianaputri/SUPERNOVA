<?php
// File: application/models/Auth_model.php

defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    // Add authentication logic here if needed
    public function logout() {
        $this->session->unset_userdata('user_id'); // Hapus data user
        redirect('auth/login'); // Redirect ke halaman login setelah logout
    }
    
}

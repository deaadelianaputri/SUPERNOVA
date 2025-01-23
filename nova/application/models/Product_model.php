<?php

class Product_model extends CI_model {
    
    public function getAllProduct()
    {
        return $this->db->get('product')->result_array();
    }

    public function getProducts($limit, $offset)
    {
    $this->db->limit($limit, $offset);
    return $this->db->get('product')->result_array();
    }

}
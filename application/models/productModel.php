<?php
defined('BASEPATH') or exit('No direct script access allowed');

class productModel extends CI_Model
{
    public function getProducts() {
        $this->db->select('*');
        $this->db->from('product');
        $this->db->order_by('id', 'ASC');

        return $this->db->get();
    }

    public function insert_data($data, $table)
    {
        $this->db->insert($table, $data);
    }
}
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class dokterModel extends CI_Model
{
    public function getDokter() {
        $this->db->select('*');
        $this->db->from('dokter');
        $this->db->order_by('id', 'ASC');

        return $this->db->get();
    }

    public function insert_data($data, $table)
    {
        $this->db->insert($table, $data);
    }
}
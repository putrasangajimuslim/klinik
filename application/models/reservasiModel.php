<?php
defined('BASEPATH') or exit('No direct script access allowed');

class reservasiModel extends CI_Model
{
    public function getReservasi() {
        $this->db->select('*');
        $this->db->from('reservasi');
        $this->db->order_by('id_reservasi', 'ASC');

        return $this->db->get();
    }

    public function insert_data($data, $table)
    {
        $this->db->insert($table, $data);
    }
}
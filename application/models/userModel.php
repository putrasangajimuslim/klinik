<?php
defined('BASEPATH') or exit('No direct script access allowed');

class userModel extends CI_Model
{
    public function cek_user($username, $password)
    {
        $kondisi = array(
            'username' => $username,
            'password' => md5($password)
        );

        $this->db->select('*');
        $this->db->from('user');
        $this->db->where($kondisi);
        $this->db->limit(1);
        return $this->db->get();
    }
}
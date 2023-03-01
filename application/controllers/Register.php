<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('penggajianModel');
    }

    public function index()
    {
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('nama_pegawai', 'Nama Pegawai', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[8]|matches[password2]', [
            'matches' => 'Password Tidak Sama!',
            'min_length' => 'Password terlalu pendek'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if($this->form_validation->run() == false){
            $data['title'] = "Registration";
            $this->load->view('Auth/register', $data);
        }else {
            $data = [
                'username' => $this->input->post('username'),
                'nama_pegawai' => $this->input->post('nama_pegawai'),
                'password' => md5($this->input->post('password')),
                'hak_akses' => 2,
                'is_active' => 1,
            ];

            $this->db->insert('pegawai', $data);
            redirect('Auth');
        }
    }
}
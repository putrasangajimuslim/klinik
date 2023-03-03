<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Datadokter extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('dokterModel');
        $this->load->helper(array('form', 'url'));
    }

    public function index()
    {
        $data['title'] = "Data Dokter";
        $data['datadokter'] = $this->db->query("SELECT * FROM dokter ORDER BY id_dokter ASC")->result();
        $this->load->view('template_website/header');
        $this->load->view('template_website/sidebar');
        $this->load->view('Admin/datadokter', $data);
        $this->load->view('template_website/footer');
    }

    public function tambah_dokter() {
        $this->load->view('template_website/header');
        $this->load->view('template_website/sidebar');
        $this->load->view('Admin/tambah_datadokter');
        $this->load->view('template_website/footer');
    }

    public function tambah_dokter_aksi() {
        $this->_rules();

        if ($this->form_validation->run() == false) {
            $this->tambah_dokter();
        } else {
            $nama           = $this->input->post('nama_dokter');
            $spesialis      = $this->input->post('spesialis');

            $data = array(
                'nama'               => $nama,
                'spesialis'                => $spesialis,
            );

            $this->dokterModel->insert_data($data, 'dokter');
            redirect('Admin/Datadokter');
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('nama_dokter', 'Nama', 'required');
        $this->form_validation->set_rules('spesialis', 'Spesialis', 'required');
    }
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Datareservasi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('reservasiModel');
        $this->load->helper(array('form', 'url'));
    }

    public function index()
    {
        $data['title'] = "Data Reservasi";
        $data['datareservasi'] = $this->db->query("SELECT * FROM reservasi ORDER BY id_reservasi ASC")->result();
        $this->load->view('template_website/header');
        $this->load->view('template_website/sidebar');
        $this->load->view('Admin/datareservasi', $data);
        $this->load->view('template_website/footer');
    }

    public function tambah_reservasi() {
        $data['datatindakan'] = $this->db->query("SELECT * FROM tindakan ORDER BY id_tindakan ASC")->result();
        $this->load->view('template_website/header');
        $this->load->view('template_website/sidebar');
        $this->load->view('Admin/tambah_datareservasi', $data);
        $this->load->view('template_website/footer');
    }

    public function tambah_reservasi_aksi() {
        $this->_rules();

        if ($this->form_validation->run() == false) {
            $this->tambah_reservasi();
        } else {
            $tglreservasi           = $this->input->post('tgl_reservasi');
            $riwayatalergi      = $this->input->post('riwayat_alergi');
            $keluhan      = $this->input->post('keluhan');
            $idtindakan      = $this->input->post('jenis_tindakan');

            $data = array(
                'tgl_reservasi'               => $tglreservasi,
                'riwayat_alergi'                => $riwayatalergi,
                'keluhan'                => $keluhan,
                'id_tindakan'                => $idtindakan,
            );

            $this->reservasiModel->insert_data($data, 'reservasi');
            redirect('Admin/Datareservasi');
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('tgl_reservasi', 'Tanggal Reservasi', 'required');
        $this->form_validation->set_rules('riwayat_alergi', 'Riwayat Alergi', 'required');
        $this->form_validation->set_rules('keluhan', 'Keluhan', 'required');
        $this->form_validation->set_rules('id_tindakan', 'Jenis Tindakan', 'required');
    }
}

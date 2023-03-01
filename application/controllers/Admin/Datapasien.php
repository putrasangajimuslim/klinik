<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Datapasien extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['title'] = "Data Pasien";
        $this->load->view('template_website/header', $data);
        $this->load->view('template_website/sidebar');
        $this->load->view('Admin/datapasien', $data);
        $this->load->view('template_website/footer');
    }
}

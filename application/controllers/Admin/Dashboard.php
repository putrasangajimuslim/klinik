<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['title'] = "Data Dokter";
        $this->load->view('template_website/header');
        $this->load->view('template_website/sidebar');
        $this->load->view('Admin/dashboard', $data);
        $this->load->view('template_website/footer');
    }
}

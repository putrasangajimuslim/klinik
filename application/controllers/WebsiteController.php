<?php
defined('BASEPATH') or exit('No direct script access allowed');

class WebsiteController extends CI_Controller
{
    public function index()
    {
        $this->load->view('template_website/header');
        $this->load->view('template_website/sidebar');
        $this->load->view('Admin/dashboard');
        $this->load->view('template_website/footer');
    }
}
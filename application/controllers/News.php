<?php
defined('BASEPATH') or exit('No direct script access allowed');

class News extends CI_Controller
{

  public function index()
  {
    $data['title'] = "News";
    $this->load->view('templates/admin_templates/header', $data);
    $this->load->view('templates/admin_templates/sidebar');
    $this->load->view('templates/admin_templates/topbar');
    $this->load->view('admin/news', $data);
    $this->load->view('templates/admin_templates/footer');
  }
}
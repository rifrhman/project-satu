<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->library('session');
    $this->load->model('User_Model');
  }

  public function index()
  {
    $validation = $this->form_validation;

    $validation->set_rules('email', 'Email', 'required');
    $validation->set_rules('password', 'Password', 'required');


    if ($validation->run() == false) {
      $this->load->view('templates/auth/auth_header');
      $this->load->view('admin/login');
      $this->load->view('templates/auth/auth_footer');
    } else {
      $this->_login();
    }
  }

  private function _login()
  {

    $email = $this->input->post('email');
    $password = $this->input->post('password');

    $users = $this->db->get_where('users', ['email' => $email])->row_array();

    var_dump($users);
    die;
  }

  public function register()
  {

    $validation = $this->form_validation;

    $validation->set_rules('name', 'Name', 'required|trim');
    $validation->set_rules(
      'email',
      'Email',
      'required|trim|valid_email|is_unique[users.email]',
      [
        'is_unique' => 'Email is already in use'
      ]
    );
    $validation->set_rules(
      'password',
      'Password',
      'required|trim|min_length[4]|matches[repassword]',
      [
        'min_length' => 'password is to short',
        'matches' => 'Password dont match'
      ]
    );
    $validation->set_rules('repassword', 'Repeat Password', 'required|trim|matches[password]');

    if ($validation->run() == false) {
      $this->load->view('templates/auth/auth_header');
      $this->load->view('admin/register');
      $this->load->view('templates/auth/auth_footer');
    } else {
      $this->User_Model->insertUser();
      $this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Congcratulations!</strong> Your account success registered.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>');
      redirect('admin');
    }
  }
}
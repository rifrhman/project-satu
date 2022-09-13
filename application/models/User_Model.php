<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_Model extends CI_Model
{

  private $_table = 'users';

  public function insertUser()
  {

    $data = [
      'name' => htmlspecialchars($this->input->post('name')),
      'email' => htmlspecialchars($this->input->post('email')),
      'image' => 'default.jpg',
      'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT),
      'date_created' => time(),
    ];

    return $this->db->insert($this->_table, $data);
  }
}
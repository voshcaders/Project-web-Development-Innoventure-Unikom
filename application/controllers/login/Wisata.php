<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Wisata extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('AuthModel');
  }

  // func untuk meload halaman login
  function index()
  {
    $this->_rules();
    if ($this->form_validation->run() == false) {
      $data['title'] = 'Login';
      $this->load->view('auth/login_wisata', $data);
    } else {
      // memanggil func proses login
      $this->_login();
    }
  }

  // func proses login
  private function _login()
  {
    $email           = htmlspecialchars($this->input->post('email', true));
    $password        = md5($this->input->post('password', true));
    $check_user      = $this->AuthModel->check_wisata($email);
    if ($check_user) {
      if ($check_user['password'] != $password) {
        $this->session->set_flashdata('error', 'Password salah!');
        redirect('login/wisata', 'refresh');
      } else {
        $data   = [
          'id'        => $check_user['id'],
          'email'     => $check_user['email'],
        ];
        $this->session->set_userdata($data);
        redirect('welcome', 'refresh');
      }
    } else {
      $this->session->set_flashdata('error', 'Tidak ditemukan, Email dan password tidak terdaftar!');
      redirect('login/wisata', 'refresh');
    }
  }

  // validasi form input login
  private function _rules()
  {
    $this->form_validation->set_rules('email', 'email', 'trim|required', [
      'required'      => 'email tidak boleh kosong!',
    ]);
    $this->form_validation->set_rules('password', 'password', 'trim|required', [
      'required'      => 'Password tidak boleh kosong!'
    ]);
  }
}

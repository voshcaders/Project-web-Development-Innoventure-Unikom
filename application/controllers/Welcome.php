<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$data['wisata']  = $this->db->get_where('wisata', ['id' => $this->session->userdata('id')])->row_array();
		$data['title']  = 'Dashboard';
		$this->load->view('wisata/dashboard', $data);
	}

	function logout()
	{
		$this->session->sess_destroy();
		redirect('home', 'refresh');
	}
}

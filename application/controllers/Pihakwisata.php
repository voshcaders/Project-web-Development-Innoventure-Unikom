<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Pihakwisata extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model('WisataModel');
  }

  function data_pemesanan()
  {
    $id  = $this->session->userdata('id');
    $data['title']      = 'Data Pemesanan';
    $data['wisata']     = $this->db->get_where('wisata', ['id' => $this->session->userdata('id')])->row_array();
    $data['wisataan']     = $this->WisataModel->getAllWisata();
    $data['pesanan']    = $this->WisataModel->getPemesananData();
    $data['pemesanan']  = $this->WisataModel->getPemesananPerWisata($id);
    $this->load->view('wisata/data_pemesanan', $data);
  }

  function ulasan()
  {
    $id   = $this->session->userdata('id');
    $data['title']      = 'Data Ulasan';
    $data['komplain']   = $this->WisataModel->getUlasanWisata($id);
    $data['wisata']      = $this->db->get_where('wisata', ['id' => $this->session->userdata('id')])->row_array();
    $this->load->view('wisata/ulasan', $data);
  }
}

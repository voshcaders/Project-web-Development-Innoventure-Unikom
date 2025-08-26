<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('WisataModel');
    }

    // func untuk load view home
    function index()
    {
        $data['judul']  = 'SMD SMKN 1 CAMPAKA CIANJUR';
        $data['member'] = $this->db->get_where('member', ['email' => $this->session->userdata('email')])->row_array();
        $data['wisata'] = $this->db->limit(3)->get('wisata')->result_array();
        $this->db->select('*');
        $this->db->from('informasi');
        $this->db->join('admin', 'admin.id = informasi.admin_id');
        $data['post'] = $this->db->get()->result_array();
        $this->load->view('front_templates/css', $data);
        $this->load->view('front_templates/nav', $data);
        $this->load->view('index', $data);
        $this->load->view('front_templates/footer');
        $this->load->view('front_templates/js');
    }

    function blog()
    {
        $data['judul']  = 'Informasi';
        $data['member'] = $this->db->get_where('member', ['email' => $this->session->userdata('email')])->row_array();
        $data['wisata'] = $this->db->limit(3)->get('wisata')->result_array();
        $this->db->select('*');
        $this->db->from('informasi');
        $this->db->join('admin', 'admin.id = informasi.admin_id');
        $data['post'] = $this->db->get()->result_array();
        $this->load->view('front_templates/css', $data);
        $this->load->view('front_templates/nav', $data);
        $this->load->view('front_templates/user/blog', $data);
        $this->load->view('front_templates/footer');
        $this->load->view('front_templates/js');
    }

    function detailBlog($id)
    {
        $data['judul']  = 'Detail Informasi';
        $data['member'] = $this->db->get_where('member', ['email' => $this->session->userdata('email')])->row_array();
        $data['post'] = $this->WisataModel->getIdPost($id)->row_array();
        $this->load->view('front_templates/css', $data);
        $this->load->view('front_templates/nav', $data);
        $this->load->view('front_templates/user/blog_detail', $data);
        $this->load->view('front_templates/footer');
        $this->load->view('front_templates/js');
    }

    // func untuk mengambil data wisata
    function info()
    {
        $data['judul']  = 'Daftar Wisata';
        $data['member'] = $this->db->get_where('member', ['email' => $this->session->userdata('email')])->row_array();
        $data['wisata'] = $this->db->get('wisata')->result_array();
        $this->load->view('front_templates/css', $data);
        $this->load->view('front_templates/nav', $data);
        $this->load->view('front_templates/user/list_wisata', $data);
        $this->load->view('front_templates/footer');
        $this->load->view('front_templates/js');
    }

    function detail($id)
    {
        $data['judul']  = 'Detail Wisata';
        $data['ulas'] = $this->db->get_where('ulasan', ['id_wisata' => $id])->row_array();
        $data['member'] = $this->db->get_where('member', ['email' => $this->session->userdata('email')])->row_array();
        $data['wisata']   = $this->WisataModel->getIdWisata($id);
        $data['userPesan'] = $this->db->get_where('pemesanan', ['id_member' => $this->session->userdata('id')])->row_array();
        $data['review'] = $this->WisataModel->data_review($id)->result_array();
        $this->load->view('front_templates/css', $data);
        $this->load->view('front_templates/nav', $data);
        $this->load->view('front_templates/user/detail_wisata', $data);
        $this->load->view('front_templates/footer');
        $this->load->view('front_templates/js');
    }

    function review()
    {
        $data = [
            'deskripsi' => $this->input->post('deskripsi'),
            'star' => $this->input->post('star'),
            'is_active' => 1,
            'id_wisata' => $this->input->post('id_wisata'),
            'id_member' => $this->input->post('id_member'),
            'tanggal' => date('Ymd'),
        ];
        $this->db->insert('ulasan', $data);
        redirect(base_url('home'));
    }

    function about()
    {
        $data['judul']  = 'About';
        $this->load->view('front_templates/css', $data);
        $this->load->view('front_templates/nav', $data);
        $this->load->view('about', $data);
        $this->load->view('front_templates/footer');
        $this->load->view('front_templates/js');
    }

    function contact()
    {
        $data['judul']  = 'contact';
        $this->load->view('front_templates/css', $data);
        $this->load->view('front_templates/nav', $data);
        $this->load->view('contact', $data);
        $this->load->view('front_templates/footer');
    }
}

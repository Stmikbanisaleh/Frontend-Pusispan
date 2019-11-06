<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Web extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Home_model', 'm_home');
    }

    public function index($seo)
    {
        $data['user'] = $this->db->get_where('msuser', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['halaman'] = $this->m_home->getIsiHalaman($seo);
        $data['link'] = $this->db->get('link_terkait')->result_array();
        $data['akses'] = $this->db->get('akses_cepat')->result_array();
        $data['uri'] = $this->uri->segment(1);
        $data['menu'] = $this->db->get_where('menu', array('id_parent' => '', 'id_posisi' => 1))->result_array();
        $data['submenu'] = $this->db->get_where('menu', array('id_parent' => '2'))->result_array();

        $this->load->view('template/header', $data);
        $this->load->view('page', $data);
        $this->load->view('template/footer', $data);
    }

    public function page($seo)
    {
        $data['user'] = $this->db->get_where('msuser', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['halaman'] = $this->m_home->getIsiHalaman($seo);
        $data['link'] = $this->db->get('link_terkait')->result_array();
        $data['akses'] = $this->db->get('akses_cepat')->result_array();
        $data['uri'] = $this->uri->segment(1);
        $data['menu'] = $this->db->get_where('menu', array('id_parent' => '', 'id_posisi' => 1))->result_array();
        $data['submenu'] = $this->db->get_where('menu', array('id_parent' => '2'))->result_array();

        $this->load->view('template/header', $data);
        $this->load->view('page', $data);
        $this->load->view('template/footer', $data);
    }
}

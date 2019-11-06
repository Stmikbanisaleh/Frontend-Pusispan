<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Integrity extends CI_Controller
{

    public function index()
    {
        $data['user'] = $this->db->get_where('msuser', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['title'] = "Integrity Zone";

        $data['link'] = $this->db->get('link_terkait')->result_array();
        $data['akses'] = $this->db->get('akses_cepat')->result_array();
        $data['uri'] = $this->uri->segment(1);
        $data['menu'] = $this->db->get_where('menu', array('id_parent' => '', 'id_posisi' => 1))->result_array();
        $data['submenu'] = $this->db->get_where('menu', array('id_parent' => '2'))->result_array();
        $this->load->view('template/header', $data);
        $this->load->view('integrity');
        $this->load->view('template/footer');
    }
}

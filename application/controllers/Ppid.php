<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ppid extends CI_Controller
{

    public function index()
    {
        $data['title'] = "PPID";

        $data['link'] = $this->db->get('link_terkait')->result_array();
        $data['akses'] = $this->db->get('akses_cepat')->result_array();
        $data['uri'] = $this->uri->segment(1);
        $data['menu'] = $this->db->get_where('menu', array('id_parent' => '', 'id_posisi' => 1))->result_array();
        $data['submenu'] = $this->db->get_where('menu', array('id_parent' => '2'))->result_array();
        $this->load->view('template/header', $data);
        $this->load->view('ppid');
        $this->load->view('template/footer');
    }
}

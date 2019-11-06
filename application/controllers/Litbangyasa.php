<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Litbangyasa extends CI_Controller
{

    public function index()
    {
        $data['user'] = $this->db->get_where('msuser', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['lit'] = $this->db->get_where('halamanstatis', array('judul_seo' => 'litbangyasa'))->row_array();

        $data['link'] = $this->db->get('link_terkait')->result_array();
        $data['akses'] = $this->db->get('akses_cepat')->result_array();
        $data['uri'] = $this->uri->segment(1);
        $data['menu'] = $this->db->get_where('menu', array('id_parent' => '', 'id_posisi' => 1))->result_array();
        $data['submenu'] = $this->db->get_where('menu', array('id_parent' => '2'))->result_array();


        $this->load->view('template/header', $data);
        $this->load->view('litbangyasa');
        $this->load->view('template/footer');
    }
}

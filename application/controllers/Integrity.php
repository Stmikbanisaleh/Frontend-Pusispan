<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Integrity extends CI_Controller
{

    public function index()
    {
        // $data['user'] = $this->db->get_where('msuser', ['email' =>
        // $this->session->userdata('email')])->row_array();

        // $data['title'] = "Integrity Zone";

        // $data['link'] = $this->db->get('link_terkait')->result_array();
        // $data['akses'] = $this->db->get('akses_cepat')->result_array();
        // $data['uri'] = $this->uri->segment(1);
        // $data['menu'] = $this->db->get_where('menu', array('id_parent' => '', 'id_posisi' => 1))->result_array();
        // $data['submenu'] = $this->db->get_where('menu', array('id_parent' => '2'))->result_array();

        $data['uri'] = $this->uri->segment(1);

        $getlistlink = $this->lapan_api_library->call('link/getlink', ['token' => TOKEN]);
        $data['link'] = $getlistlink['rows'];
        $data['user'] = $this->lapan_api_library->call3('users/getuserbyemail', ['token' => TOKEN, $this->session->userdata('email')]);

        $getaksescepat = $this->lapan_api_library->call('aksescepat/getaksescepat', ['token' => TOKEN]);
        $data['akses'] = $getaksescepat['rows'];

        $data_menuwhere = [
            'token' => TOKEN,
            'id_parent' => '',
            'id_posisi' => 1
        ];
        $getmenuwhere = $this->lapan_api_library->call('menu/getmenuwhere', $data_menuwhere);
        $data['menu'] = $getmenuwhere['rows'];

        $getmenu = $this->lapan_api_library->call('menu/getmenu', ['token' => TOKEN]);
        $data['submenu'] = $getmenu['rows'];
        $this->load->view('template/header', $data);
        $this->load->view('integrity');
        $this->load->view('template/footer');
    }
}

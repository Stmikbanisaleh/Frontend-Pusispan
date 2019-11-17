<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Arsip extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {

        $this->load->library('pagination');
        $data['user'] = $this->lapan_api_library->call3('users/getuserbyemail', ['token' => TOKEN, 'email' => $this->session->userdata('email')]);

        $config['base_url'] = base_url().'arsip/index';
        //$config['base_url'] = 'http://pusispan.stmik-banisaleh.com/pusispan/download/index';
        $jml = $this->lapan_api_library->call('download/jmldownload', ['token' => TOKEN]);

        $config['total_rows'] = $jml['rows'];
        $config['per_page'] = 10;

        $config['full_tag_open'] = '<nav><ul class="pagination ">';
        $config['full_tag_close'] = '</ul></nav>';

        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';

        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="active"><a class="" href="#" >';
        $config['cur_tag_close'] = '</li>';

        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        $config['attributes'] = array('class' => 'page-link');

        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(3);
        $data_paging = [
            'token' => TOKEN,
            'limit' => $config['per_page'],
            'start' => $data['start']
        ];
        $getlist_paging = $this->lapan_api_library->call('download/getdownloadpaging', $data_paging);
        $data['download'] = $getlist_paging;


        //=============================================================================================================================//

        $data['uri'] = $this->uri->segment(1);

        $getlistlink = $this->lapan_api_library->call('link/getlink', ['token' => TOKEN]);
        $data['link'] = $getlistlink['rows'];

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
        $this->load->view('arsip/index');
        $this->load->view('template/footer');
    }
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Home_model', 'm_home');
    }

    public function index()
    {
         $data['user'] = $this->lapan_api_library->call3('users/getuserbyemail', ['token' => TOKEN, $this->session->userdata('email')]);

        $hasil_listberita = $this->lapan_api_library->call('berita/getlistberita', ['token' => TOKEN]);
        $data['berita'] = $hasil_listberita['rows'];

        $hasil_listagenda = $this->lapan_api_library->call('agenda/getlistagendalimit3', ['token' => TOKEN]);
        $data['agenda'] = $hasil_listagenda['rows'];

        $hasil_getkegiatanmt = $this->lapan_api_library->call('kegiatan/getkegiatanmt', ['token' => TOKEN]);
        $data['kmt'] = $hasil_getkegiatanmt['rows'][0];

        $hasil_getkegiatanat = $this->lapan_api_library->call('kegiatan/getkegiatanat', ['token' => TOKEN]);
        $data['kat'] = $hasil_getkegiatanat['rows'][0];

        $hasil_getkegiatanst = $this->lapan_api_library->call('kegiatan/getkegiatanst', ['token' => TOKEN]);
        $data['kst'] = $hasil_getkegiatanst['rows'][0];

        $hasil_getisihalaman = $this->lapan_api_library->call('halaman/getisihalaman', ['token' => TOKEN, 'seo' => 'sejarah_singkat']);
        $data['sejarah'] = $hasil_getisihalaman['rows'];

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
        $this->load->view('home', $data);
        $this->load->view('template/footer', $data);
    }

    public function page()
    {
        $data['user'] = $this->lapan_api_library->call3('users/getuserbyemail', ['token' => TOKEN, $this->session->userdata('email')]);
        
        $data['uri'] = $this->uri->segment(1);
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
        $this->load->view('page', $data);
        $this->load->view('template/footer', $data);
    }
}

<?php

defined('BASEPATH') or exit('No direct script access allowed');


class Profile_model extends CI_Model
{

    public function getIsiHalaman($seo)
    {
        $query = "SELECT * FROM halamanstatis WHERE judul_seo='$seo'";
        return $this->db->query($query)->row_array();
    }
}

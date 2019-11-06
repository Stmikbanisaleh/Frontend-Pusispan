<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Galeri_model extends CI_Model
{
    public function getGaleri($limit, $start)
    {
        $this->db->order_by('id_album', 'DESC');
        return $this->db->get('album', $limit, $start)->result_array();
    }

    public function getGaleriList($limit)
    {
        $this->db->order_by('id_album', 'DESC');
        return $this->db->get('album', $limit)->result_array();
    }

    public function getGaleriDetail($id)
    {
        $query = "SELECT * FROM album WHERE id = '$id'";
        return $this->db->query($query)->result_array();
    }

    public function hitungJumlahGaleri()
    {
        return $this->db->get('album')->num_rows();
    }
}

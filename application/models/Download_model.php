<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Download_model extends CI_Model
{
    public function getDownload($limit, $start)
    {
        $this->db->order_by('tgl_posting', 'DESC');
        return $this->db->get('download', $limit, $start)->result_array();
    }

    public function getDownloadList($limit)
    {
        $this->db->order_by('tgl_posting', 'DESC');
        return $this->db->get('download', $limit)->result_array();
    }

    public function getDownloadDetail($id)
    {
        $query = "SELECT * FROM download WHERE id_download = '$id'";
        return $this->db->query($query)->result_array();
    }

    public function hitungJumlahDownload()
    {
        return $this->db->get('download')->num_rows();
    }
}

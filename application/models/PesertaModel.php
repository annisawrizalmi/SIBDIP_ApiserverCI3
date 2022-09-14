<?php

defined('BASEPATH') or exit('No direct script access allowed');

class PesertaModel extends CI_Model
{

    public function get_partial_peserta()
    {
        $this->db->select('');
        $query = $this->db->get('tb_student');
        return $query->result_array();
    }
}
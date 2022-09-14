<?php

defined('BASEPATH') or exit('No direct script access allowed');

class DiklatModel extends CI_Model
{

    public function get_partial_diklat()
    {
        $this->db->select('assessment_to,assessment_name,assessment_date_start,assessment_date_finish');
        $query = $this->db->get('tb_assessment');
        return $query->result_array();
    }

    public function editDiklat($id)
    {
        $this->db->select('assessment_to,assessment_name,assessment_date_start,assessment_date_finish')->where('assessment_id', $id);
        $query = $this->db->get('tb_assessment');
        return $query->row();
    }

    public function insertDiklat($data)
    {
        $this->db->insert('tb_assessment', $data);
        return $this->db->affected_rows();
    }
}
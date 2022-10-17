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

    public function update_diklat($id, $data)
    {
        $this->db->update('tb_assessment', $data, ['assessment_id' => $id]);
        return $this->db->affected_rows();
    }

    public function delete_diklat($id)
    {
        $this->db->delete('tb_assessment', ['assessment_id' => $id]);
        return $this->db->affected_rows();
    }

    public function idterurut($total)
    {
        if ($total == 0) {
            return 1;
        } else {

            $count = $this->db->select_max('assessment_id')->get('tb_assessment')->row()->assessment_id;
            $count += 1;
            return $count;
        }
    }

    public function toterurut($countto)
    {
        if ($countto == 0) {
            return 1;
        } else {

            $totalto = $this->db->select_max('assessment_to')->get('tb_assessment')->row()->assessment_to;
            $totalto += 1;
            return $totalto;
        }
    }
}
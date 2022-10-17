<?php

defined('BASEPATH') or exit('No direct script access allowed');

class JwlModel extends CI_Model
{
    public function get_partial_Jwl()
    {
        $this->db->select('material_name,material_detail,material_date,material_time');
        $query = $this->db->get('tb_material');
        return $query->result_array();
    }

    public function editJwl($id)
    {
        $this->db->select('material_name,material_detail,material_date,material_time')->where('material_id', $id);
        //$this->db->where('material_id', $id);
        $query = $this->db->get('tb_material');
        return $query->row();
    }

    public function insertJwl($data)
    {
        $this->db->insert('tb_material', $data);
        return $this->db->affected_rows();
    }

    public function update_Jwl($id, $data)
    {
        $this->db->update('tb_material', $data, ['material_id' => $id]);
        return $this->db->affected_rows();
    }

    public function delete_Jwl($id)
    {
        $this->db->delete('tb_material', ['material_id' => $id]);
        return $this->db->affected_rows();
    }

    public function idterurut($total)
    {
        if ($total == 0) {
            return 1;
        } else {

            $count = $this->db->select_max('material_id')->get('tb_material')->row()->material_id;
            $count += 1;
            return $count;
        }
    }
}
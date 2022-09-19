<?php

defined('BASEPATH') or exit('No direct script access allowed');

class AsistenModel extends CI_Model
{

    public function get_partial_asisten()
    {
        $this->db->select('assistant_nik,assistant_front_degree,assistant_name,assistant_back_degree, assistant_training');
        $query = $this->db->get('tb_assistant');
        return $query->result_array();
    }

    public function editAsisten($id)
    {
        $this->db->select('assistant_nik,assistant_front_degree,assistant_name,assistant_back_degree, assistant_training')->where('assistant_id', $id);
        $query = $this->db->get('tb_assistant');
        return $query->row();
    }

    public function insertAsisten($data)
    {
        $this->db->insert('tb_assistant', $data);
        return $this->db->affected_rows();
    }

    public function update_Asisten($id, $data)
    {
        $this->db->update('tb_assistant', $data, ['assistant_id' => $id]);
        return $this->db->affected_rows();
    }

    public function delete_Asisten($id)
    {
        $this->db->delete('tb_assistant', ['assistant_id' => $id]);
        return $this->db->affected_rows();
    }
}



    // public function get_asisten_all()
    // {
    //     $query = $this->db->getall('tb_assistant');
    //     return $query->result_array();
    // }
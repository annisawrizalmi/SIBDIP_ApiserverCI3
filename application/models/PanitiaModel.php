<?php

defined('BASEPATH') or exit('No direct script access allowed');

class PanitiaModel extends CI_Model
{

    public function get_partial_panitia()
    {
        $this->db->select('committee_id,committee_front_degree,committee_name,committee_back_degree');
        $query = $this->db->get('tb_committee');
        return $query->result_array();
    }

    public function editPanitia($id)
    {
        $this->db->select('committee_id,committee_front_degree,committee_name,committee_back_degree')->where('committee_id', $id);
        $query = $this->db->get('tb_committee');
        return $query->row();
    }

    public function insertPanitia($data)
    {
        $this->db->insert('tb_committee', $data);
        return $this->db->affected_rows();
    }

    public function update_Panitia($id, $data)
    {
        $this->db->update('tb_committee', $data, ['committee_id' => $id]);
        return $this->db->affected_rows();
    }


    public function delete_Panitia($id)
    {
        $this->db->delete('tb_committee', ['committee_id' => $id]);
        return $this->db->affected_rows();
    }
}




    // public function get_panitia()
    // {
    //     $query = $this->db->get('tb_committee');
    //     return $query->result_array();
    // }
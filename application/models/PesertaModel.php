<?php

defined('BASEPATH') or exit('No direct script access allowed');

class PesertaModel extends CI_Model
{


    public function get_partial_peserta()
    {
        $this->db->select('fullname, gender, address, department');
        $query = $this->db->get('tb_student');
        return $query->result_array();
    }

    public function editPeserta($id)
    {
        $this->db->select('fullname, gender, address, department')->where('student_id', $id);
        $query = $this->db->get('tb_student');
        return $query->row();
    }

    public function insertPeserta($data)
    {
        $this->db->insert('tb_student', $data);
        return $this->db->affected_rows();
    }

    public function update_Peserta($id, $data)
    {
        $this->db->update('tb_student', $data, ['student_id' => $id]);
        return $this->db->affected_rows();
    }

    public function delete_Peserta($id)
    {
        $this->db->delete('tb_student', ['student_id' => $id]);
        return $this->db->affected_rows();
    }

    //mengurutkan id
    public function idterurut($total)
    {
        if ($total == 0) {
            return 1;
        } else {

            $count = $this->db->select_max('student_id')->get('tb_student')->row()->student_id;
            $count += 1;
            return $count;
        }
    }
}
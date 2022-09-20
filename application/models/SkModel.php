<?php

defined('BASEPATH') or exit('No direct script access allowed');

class SkModel extends CI_Model
{
    public function get_partial_sk()
    {
        $this->db->select('assessment_no_sk_penyelenggara, assessment_no_sk_peserta, assessment_no_sk_asesor, assessment_no_sk_evaluasi,assessment_tgl_sk_evaluasi, assessment_no_sk_uk, assessment_tgl_sk_uk, assessment_no_sk_hasil_uk, assessment_tgl_sk_hasil_uk');
        $query = $this->db->get('tb_assessment');
        return $query->result_array();
    }

    public function editSk($id)
    {
        $this->db->select('assessment_no_sk_penyelenggara, assessment_no_sk_peserta, assessment_no_sk_asesor, assessment_no_sk_evaluasi,assessment_tgl_sk_evaluasi, assessment_no_sk_uk, assessment_tgl_sk_uk, assessment_no_sk_hasil_uk, assessment_tgl_sk_hasil_uk')->where('assessment_id', $id);
        $query = $this->db->get('tb_assessment');
        return $query->row();
    }

    public function insertSk($data)
    {
        $this->db->insert('tb_assessment', $data);
        return $this->db->affected_rows();
    }

    ///update belum bisa
    public function update_Sk($id, $data)
    {
        $this->db->update('tb_assessment', $data, ['assessment_id' => $id]);
        return $this->db->affected_rows();
    }

    public function delete_Sk($id)
    {
        $this->db->delete('tb_assessment', ['assessment_id' => $id]);
        return $this->db->affected_rows();
    }
}
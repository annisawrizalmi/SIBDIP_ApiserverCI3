<?php

defined('BASEPATH') or exit('No direct script access allowed');

class PegawaiModel extends CI_Model
{
    public function get_partial_pegawai()
    {
        $this->db->select('nip,gelar_depan, nama, gelar_belakang,assistant');
        $query = $this->db->get('tb_pegawai');
        return $query->result_array();
    }

    public function editPegawai($id)
    {
        $this->db->select('nip,gelar_depan, nama, gelar_belakang,assistant')->where('pegawai_id', $id);
        $query = $this->db->get('tb_pegawai');
        return $query->row();
    }

    public function insertPegawai($data)
    {
        $this->db->insert('tb_pegawai', $data);
        return $this->db->affected_rows();
    }

    public function update_Pegawai($id, $data)
    {
        $this->db->update('tb_pegawai', $data, ['pegawai_id' => $id]);
        return $this->db->affected_rows();
    }

    public function delete_Pegawai($id)
    {
        $this->db->delete('tb_pegawai', ['pegawai_id' => $id]);
        return $this->db->affected_rows();
    }
}
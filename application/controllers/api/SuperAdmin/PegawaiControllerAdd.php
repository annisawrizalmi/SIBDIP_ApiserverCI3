<?php

use Restserver\Libraries\REST_Controller;

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class PegawaiControllerAdd extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('PegawaiModel');
    }

    //menambahkan data
    public function addPegawai_post()
    {
        $pegawai = new PegawaiModel;

        $data = [
            'pegawai_id'                => $this->post('pegawai_id'),
            'uid'                       => $this->post('uid'),
            'sort_id'                   => $this->post('sort_id'),
            'division_id'               => $this->post('division_id'),
            'superior_id'               => $this->post('superior_id'),
            'assistant'                 => $this->post('assistant'),
            'sort_number'               => $this->post('sort_number'),
            'nik'                       => $this->post('nik'),
            'nip'                       => $this->post('nip'),
            'met'                       => $this->post('met'),
            'exp_met'                   => $this->post('exp_met'),
            'skill'                     => $this->post('skill'),
            'scheme'                    => $this->post('scheme'),
            'gelar_depan'               => $this->post('gelar_depan'),
            'nama'                      => $this->post('nama'),
            'gelar_belakang'            => $this->post('gelar_belakang'),
            'jenis_kelamin'             => $this->post('jenis_kelamin'),
            'tempat_lahir'              => $this->post('tempat_lahir'),
            'tanggal_lahir'             => $this->post('tanggal_lahir'),
            'alamat'                    => $this->post('alamat'),
            'id_provinsi'               => $this->post('id_provinsi'),
            'id_kabupaten'              => $this->post('id_kabupaten'),
            'id_kecamatan'              => $this->post('id_kecamatan'),
            'id_kelurahan'              => $this->post('id_kelurahan'),
            'telepon'                   => $this->post('telepon'),
            'email'                     => $this->post('email'),
            'agama'                     => $this->post('agama'),
            'status_perkawinan'         => $this->post('status_perkawinan'),
            'golongan_darah'            => $this->post('golongan_darah'),
            'pendidikan'                => $this->post('pendidikan'),
            'jurusan'                   => $this->post('jurusan'),
            'tahun_tamat'               => $this->post('tahun_tamat'),
            'status'                    => $this->post('status'),
            'jabatan'                   => $this->post('jabatan'),
            'jabatan_ext'               => $this->post('jabatan_ext'),
            'pangkat'                   => $this->post('pangkat'),
            'golongan'                  => $this->post('golongan'),
            'profil_singkat'            => $this->post('profil_singkat'),
            'latar_pendidikan'          => $this->post('latar_pendidikan'),
            'no_bpjs'                   => $this->post('no_bpjs'),
            'faskes_kesehatan'          => $this->post('faskes_kesehatan'),
            'alamat_faskes_kesehatan'   => $this->post('alamat_faskes_kesehatan'),
            'faskes_gigi'               => $this->post('faskes_gigi'),
            'alamat_faskes_gigi'        => $this->post('alamat_faskes_gigi'),
            'office'                    => $this->post('office'),
            'office_phone'              => $this->post('office_phone'),
            'training'                  => $this->post('training'),
            'work_exp'                  => $this->post('work_exp'),
            'teach_exp'                 => $this->post('teach_exp'),
            'scientific_work'           => $this->post('scientific_work'),
            'special_sub'               => $this->post('special_sub'),
            'npwp'                      => $this->post('npwp'),
            'no_npwp'                   => $this->post('no_npwp'),
            'no_efin'                   => $this->post('no_efin'),
            'type_status'               => $this->post('type_status'),
            'pejabat'                   => $this->post('pejabat'),
            'penanggungjawab'           => $this->post('penanggungjawab'),
            'username'                  => $this->post('username'),
            'password'                  => $this->post('password'),
            'level'                     => $this->post('level'),
            'role'                      => $this->post('role'),
            'avatar'                    => $this->post('avatar'),
            'avatar_slug'               => $this->post('avatar_slug'),
            'ava'                       => $this->post('ava'),
            'signature'                 => $this->post('signature'),
            'blocked'                   => $this->post('blocked'),
            'activated'                 => $this->post('activated'),
            'att'                       => $this->post('att'),
            'org_publish'               => $this->post('org_publish'),
            'token'                     => $this->post('token'),
            'status_token'              => $this->post('status_token'),
            'date_token'                => $this->post('date_token'),
            'end_token'                 => $this->post('end_token'),
            'date_added_employee'       => $this->post('date_added_employee'),
            'date_updated_employee'     => $this->post('date_updated_employee')
        ];

        $result = $pegawai->insertPegawai($data);

        if ($result > 0) {
            $this->response([
                'status' => true,
                'message' => 'NEW Pegawai Created'
            ], REST_Controller::HTTP_CREATED);
        } else {
            $this->response([
                'status' => false,
                'message' => 'FAILDE TO CREATE Pegawai'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }
}




/* 
            


*/
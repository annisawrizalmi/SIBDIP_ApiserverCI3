<?php

use Restserver\Libraries\REST_Controller;

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class PegawaiControllerUpdate extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('PegawaiModel');
    }

    //update data
    public function updatePegawai_put($id)
    {

        $pegawai = new PegawaiModel;
        $data = [
            'pegawai_id'                => $this->put('pegawai_id'),
            'uid'                       => $this->put('uid'),
            'sort_id'                   => $this->put('sort_id'),
            'division_id'               => $this->put('division_id'),
            'superior_id'               => $this->put('superior_id'),
            'assistant'                 => $this->put('assistant'),
            'sort_number'               => $this->put('sort_number'),
            'nik'                       => $this->put('nik'),
            'nip'                       => $this->put('nip'),
            'met'                       => $this->put('met'),
            'exp_met'                   => $this->put('exp_met'),
            'skill'                     => $this->put('skill'),
            'scheme'                    => $this->put('scheme'),
            'gelar_depan'               => $this->put('gelar_depan'),
            'nama'                      => $this->put('nama'),
            'gelar_belakang'            => $this->put('gelar_belakang'),
            'jenis_kelamin'             => $this->put('jenis_kelamin'),
            'tempat_lahir'              => $this->put('tempat_lahir'),
            'tanggal_lahir'             => $this->put('tanggal_lahir'),
            'alamat'                    => $this->put('alamat'),
            'id_provinsi'               => $this->put('id_provinsi'),
            'id_kabupaten'              => $this->put('id_kabupaten'),
            'id_kecamatan'              => $this->put('id_kecamatan'),
            'id_kelurahan'              => $this->put('id_kelurahan'),
            'telepon'                   => $this->put('telepon'),
            'email'                     => $this->put('email'),
            'agama'                     => $this->put('agama'),
            'status_perkawinan'         => $this->put('status_perkawinan'),
            'golongan_darah'            => $this->put('golongan_darah'),
            'pendidikan'                => $this->put('pendidikan'),
            'jurusan'                   => $this->put('jurusan'),
            'tahun_tamat'               => $this->put('tahun_tamat'),
            'status'                    => $this->put('status'),
            'jabatan'                   => $this->put('jabatan'),
            'jabatan_ext'               => $this->put('jabatan_ext'),
            'pangkat'                   => $this->put('pangkat'),
            'golongan'                  => $this->put('golongan'),
            'profil_singkat'            => $this->put('profil_singkat'),
            'latar_pendidikan'          => $this->put('latar_pendidikan'),
            'no_bpjs'                   => $this->put('no_bpjs'),
            'faskes_kesehatan'          => $this->put('faskes_kesehatan'),
            'alamat_faskes_kesehatan'   => $this->put('alamat_faskes_kesehatan'),
            'faskes_gigi'               => $this->put('faskes_gigi'),
            'alamat_faskes_gigi'        => $this->put('alamat_faskes_gigi'),
            'office'                    => $this->put('office'),
            'office_phone'              => $this->put('office_phone'),
            'training'                  => $this->put('training'),
            'work_exp'                  => $this->put('work_exp'),
            'teach_exp'                 => $this->put('teach_exp'),
            'scientific_work'           => $this->put('scientific_work'),
            'special_sub'               => $this->put('special_sub'),
            'npwp'                      => $this->put('npwp'),
            'no_npwp'                   => $this->put('no_npwp'),
            'no_efin'                   => $this->put('no_efin'),
            'type_status'               => $this->put('type_status'),
            'pejabat'                   => $this->put('pejabat'),
            'penanggungjawab'           => $this->put('penanggungjawab'),
            'username'                  => $this->put('username'),
            'password'                  => $this->put('password'),
            'level'                     => $this->put('level'),
            'role'                      => $this->put('role'),
            'avatar'                    => $this->put('avatar'),
            'avatar_slug'               => $this->put('avatar_slug'),
            'ava'                       => $this->put('ava'),
            'signature'                 => $this->put('signature'),
            'blocked'                   => $this->put('blocked'),
            'activated'                 => $this->put('activated'),
            'att'                       => $this->put('att'),
            'org_publish'               => $this->put('org_publish'),
            'token'                     => $this->put('token'),
            'status_token'              => $this->put('status_token'),
            'date_token'                => $this->put('date_token'),
            'end_token'                 => $this->put('end_token'),
            'date_added_employee'       => $this->put('date_added_employee'),
            'date_updated_employee'     => $this->put('date_updated_employee')

        ];

        $update_result = $pegawai->update_Pegawai($id, $data);

        if ($update_result > 0) {
            $this->response([
                'status' => true,
                'message' => 'NEW Pegawai Updated'
            ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'status' => false,
                'message' => 'FAILDE TO Updated Pegawai'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }
}
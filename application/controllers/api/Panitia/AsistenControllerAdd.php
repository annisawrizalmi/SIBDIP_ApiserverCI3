<?php

use Restserver\Libraries\REST_Controller;

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class AsistenControllerAdd extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('AsistenModel');
    }


    //menambahkan data
    public function addAsisten_post()
    {
        $asisten = new AsistenModel;

        $data = [
            'assistant_id'                      => $this->post('assistant_id'),
            'assistant_nik'                     => $this->post('assistant_nik'),
            'assistant_nip'                     => $this->post('assistant_nip'),
            'assistant_front_degree'            => $this->post('assistant_front_degree'),
            'assistant_name'                    => $this->post('assistant_name'),
            'assistant_back_degree'             => $this->post('assistant_back_degree'),
            'assistant_birthplace'              => $this->post('assistant_birthplace'),
            'assistant_birthday'                => $this->post('assistant_birthday'),
            'assistant_pangkat'                 => $this->post('assistant_pangkat'),
            'assistant_gol'                     => $this->post('assistant_gol'),
            'assistant_jabatan'                 => $this->post('assistant_jabatan'),
            'assistant_address'                 => $this->post('assistant_address'),
            'assistant_provinsi_id'             => $this->post('assistant_provinsi_id'),
            'assistant_kabupaten_id'            => $this->post('assistant_kabupaten_id'),
            'assistant_kecamatan_id'            => $this->post('assistant_kecamatan_id'),
            'assistant_kelurahan_id'            => $this->post('assistant_kelurahan_id'),
            'assistant_phone'                   => $this->post('assistant_phone'),
            'assistant_education'               => $this->post('assistant_education'),
            'assistant_npwp'                    => $this->post('assistant_npwp'),
            'assistant_office'                  => $this->post('assistant_office'),
            'assistant_office_phone'            => $this->post('assistant_office_phone'),
            'assistant_training'                => $this->post('assistant_training'),
            'assistant_work_exp'                => $this->post('assistant_work_exp'),
            'assistant_teach_exp'               => $this->post('assistant_teach_exp'),
            'assistant_scientific_work'         => $this->post('assistant_scientific_work'),
            'assistant_special_sub'             => $this->post('assistant_special_sub'),
            'assistant_date_added'              => $this->post('assistant_date_added'),
            'assistant_date_updated'            => $this->post('assistant_date_updated'),
        ];

        $result = $asisten->insertAsisten($data);

        if ($result > 0) {
            $this->response([
                'status' => true,
                'message' => 'NEW Asisten Created'
            ], REST_Controller::HTTP_CREATED);
        } else {
            $this->response([
                'status' => false,
                'message' => 'FAILDE TO CREATE Asisten'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }
}
<?php

use Restserver\Libraries\REST_Controller;

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class AsistenControllerUpdate extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('AsistenModel');
    }

    //update data
    public function updateAsisten_put($id)
    {

        $asisten = new AsistenModel;
        $data = [
            'assistant_id'                      => $this->put('assistant_id'),
            'assistant_nik'                     => $this->put('assistant_nik'),
            'assistant_nip'                     => $this->put('assistant_nip'),
            'assistant_front_degree'            => $this->put('assistant_front_degree'),
            'assistant_name'                    => $this->put('assistant_name'),
            'assistant_back_degree'             => $this->put('assistant_back_degree'),
            'assistant_birthplace'              => $this->put('assistant_birthplace'),
            'assistant_birthday'                => $this->put('assistant_birthday'),
            'assistant_pangkat'                 => $this->put('assistant_pangkat'),
            'assistant_gol'                     => $this->put('assistant_gol'),
            'assistant_jabatan'                 => $this->put('assistant_jabatan'),
            'assistant_address'                 => $this->put('assistant_address'),
            'assistant_provinsi_id'             => $this->put('assistant_provinsi_id'),
            'assistant_kabupaten_id'            => $this->put('assistant_kabupaten_id'),
            'assistant_kecamatan_id'            => $this->put('assistant_kecamatan_id'),
            'assistant_kelurahan_id'            => $this->put('assistant_kelurahan_id'),
            'assistant_phone'                   => $this->put('assistant_phone'),
            'assistant_education'               => $this->put('assistant_education'),
            'assistant_npwp'                    => $this->put('assistant_npwp'),
            'assistant_office'                  => $this->put('assistant_office'),
            'assistant_office_phone'            => $this->put('assistant_office_phone'),
            'assistant_training'                => $this->put('assistant_training'),
            'assistant_work_exp'                => $this->put('assistant_work_exp'),
            'assistant_teach_exp'               => $this->put('assistant_teach_exp'),
            'assistant_scientific_work'         => $this->put('assistant_scientific_work'),
            'assistant_special_sub'             => $this->put('assistant_special_sub'),
            'assistant_date_added'              => $this->put('assistant_date_added'),
            'assistant_date_updated'            => $this->put('assistant_date_updated'),
        ];

        $update_result = $asisten->update_Asisten($id, $data);

        if ($update_result > 0) {
            $this->response([
                'status' => true,
                'message' => 'NEW Asisten Updated'
            ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'status' => false,
                'message' => 'FAILDE TO Updated Asisten'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }
}
<?php

use Restserver\Libraries\REST_Controller;

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class SkControllerUpdate extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('SkModel');
    }

    //update data
    public function updateSk_put($id)
    {

        $Sk = new SkModel;
        $data = [
            'assessment_no_sk_penyelenggara'           => $this->put('assessment_no_sk_penyelenggara'),
            'assessment_no_sk_peserta'                 => $this->put('assessment_no_sk_peserta'),
            'assessment_no_sk_asesor'                  => $this->put('assessment_no_sk_asesor'),
            'assessment_no_sk_evaluasi'                => $this->put('assessment_no_sk_evaluasi'),
            'assessment_tgl_sk_evaluasi'               => $this->put('assessment_tgl_sk_evaluasi'),
            'assessment_no_sk_uk'                      => $this->put('assessment_no_sk_uk'),
            'assessment_tgl_sk_uk'                     => $this->put('assessment_tgl_sk_uk'),
            'assessment_no_sk_hasil_uk'                => $this->put('assessment_no_sk_hasil_uk'),
            'assessment_tgl_sk_hasil_uk'               => $this->put('assessment_tgl_sk_hasil_uk'),
        ];

        $update_result = $Sk->update_Sk($id, $data);

        if ($update_result > 0) {
            $this->response([
                'status' => true,
                'message' => 'NEW Surat Keputusan Updated'
            ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'status' => false,
                'message' => 'FAILDE TO Updated Surat Keputusan'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }
}
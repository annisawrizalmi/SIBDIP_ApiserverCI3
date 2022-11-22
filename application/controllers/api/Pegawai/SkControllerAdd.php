<?php

//tidak dipakai

use Restserver\Libraries\REST_Controller;

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class SkControllerAdd extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('SkModel');
    }

    //menambahkan data
    public function addSk_post()
    {
        $sk = new SkModel;

        $i = $this->db->count_all('tb_assessment');

        $data = [
            'assessment_id'                            => $sk->idterurut($i),
            'assessment_no_sk_penyelenggara'           => $this->post('assessment_no_sk_penyelenggara'),
            'assessment_no_sk_peserta'                 => $this->post('assessment_no_sk_peserta'),
            'assessment_no_sk_asesor'                  => $this->post('assessment_no_sk_asesor'),
            'assessment_no_sk_evaluasi'                => $this->post('assessment_no_sk_evaluasi'),
            'assessment_tgl_sk_evaluasi'               => $this->post('assessment_tgl_sk_evaluasi'),
            'assessment_no_sk_uk'                      => $this->post('assessment_no_sk_uk'),
            'assessment_tgl_sk_uk'                     => $this->post('assessment_tgl_sk_uk'),
            'assessment_no_sk_hasil_uk'                => $this->post('assessment_no_sk_hasil_uk'),
            'assessment_tgl_sk_hasil_uk'               => $this->post('assessment_tgl_sk_hasil_uk'),
        ];

        $result = $sk->insertSk($data);

        if ($result > 0) {
            $this->response([
                'status' => true,
                'message' => 'NEW Surat Keputusan Created'
            ], REST_Controller::HTTP_CREATED);
        } else {
            $this->response([
                'status' => false,
                'message' => 'FAILDE TO CREATE Surat Keputusan'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }
}
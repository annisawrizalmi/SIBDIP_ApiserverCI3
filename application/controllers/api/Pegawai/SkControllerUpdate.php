<?php

//untuk update dan tambah pake controller ini aja dan tambah field yang perlunya.

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
        $i = $this->db->count_all('tb_assessment');
        $data = [
            'assessment_id'                             => $Sk->idterurut($i),
            'scheme_id'                                 => $this->post('scheme_id'),
            'assessment_name'                           => $this->post('assessment_name'),
            'assessment_date_start'                     => $this->post('assessment_date_start'),
            'assessment_date_finish'                    => $this->post('assessment_date_finish'),
            'assessment_delay'                          => $this->post('assessment_delay'),
            'assessment_type'                           => $this->post('assessment_type'),
            'assessment_location'                       => $this->post('assessment_location'),
            'assessment_address'                        => $this->post('assessment_address'),
            'assessment_origin'                         => $this->post('assessment_origin'),
            'assessment_person_in_charge'               => $this->post('assessment_person_in_charge'),
            'assessment_participant'                    => $this->post('assessment_participant'),
            'assessment_tgl_sk'                         => $this->post('assessment_tgl_sk'),
            'assessment_no_sk_penyelenggara'            => $this->put('assessment_no_sk_penyelenggara'),
            'assessment_no_sk_peserta'                  => $this->put('assessment_no_sk_peserta'),
            'assessment_no_sk_asesor'                   => $this->put('assessment_no_sk_asesor'),
            'assessment_tgl_sk_evaluasi'                => $this->put('assessment_tgl_sk_evaluasi'),
            'assessment_no_sk_evaluasi'                 => $this->put('assessment_no_sk_evaluasi'),
            'assessment_tgl_su'                         => $this->put('assessment_tgl_su'),
            'assessment_honor_pj'                       => $this->put('assessment_honor_pj'),
            'assessment_honor_ketua'                    => $this->put('assessment_honor_ketua'),
            'assessment_honor_anggota'                  => $this->put('assessment_honor_anggota'),
            'assessment_honor_outside_instructor'       => $this->put('assessment_honor_outside_instructor'),
            'assessment_honor_inside_instructor'        => $this->put('assessment_honor_inside_instructor'),
            'assessment_honor_assistant'                => $this->put('assessment_honor_assistant'),
            'assessment_honor_student'                  => $this->put('assessment_honor_student'),
            'assessment_honor'                          => $this->put('assessment_honor'),
            'assessment_year'                           => $this->put('assessment_year'),
            'assessment_code_keg'                       => $this->put('assessment_code_keg'),



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
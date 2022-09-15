<?php

use Restserver\Libraries\REST_Controller;

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class PesertaControllerUpdate extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('PesertaModel');
    }


    //update data
    public function updatePeserta_put($id)
    {

        $peserta = new PesertaModel;
        $data = [
            'student_id'                            => $this->put('student_id'),
            'assessment_id'                         => $this->put('assessment_id'),
            'nik'                                   => $this->put('nik'),
            'fullname'                              => $this->put('fullname'),
            'gender'                                => $this->put('gender'),
            'birthplace'                            => $this->put('birthplace'),
            'birthday'                              => $this->put('birthday'),
            'religion'                              => $this->put('religion'),
            'marital_status'                        => $this->put('marital_status'),
            'address'                               => $this->put('address'),
            'id_provinsi'                           => $this->put('id_provinsi'),
            'id_kabupaten'                          => $this->put('id_kabupaten'),
            'id_kecamatan'                          => $this->put('id_kecamatan'),
            'id_kelurahan'                          => $this->put('id_kelurahan'),
            'phone'                                 => $this->put('phone'),
            'email'                                 => $this->put('email'),
            'education'                             => $this->put('education'),
            'department'                            => $this->put('department'),
            'diploma_year'                          => $this->put('diploma_year'),
            'company_id'                            => $this->put('company_id'),
            'assessor_id'                           => $this->put('assessor_id'),
            'resign'                                => $this->put('resign'),
            'graduated'                             => $this->put('graduated'),
            'present'                               => $this->put('present'),
            'competent'                             => $this->put('competent'),
            'total_present'                         => $this->put('total_present'),
            'company_name'                          => $this->put('company_name'),
            'student_reg_no'                        => $this->put('student_reg_no'),
            'student_cert_no'                       => $this->put('student_cert_no'),
            'student_blanko_no'                     => $this->put('student_blanko_no'),
            'pretest'                               => $this->put('pretest'),
            'posttest'                              => $this->put('posttest'),
            'avatar'                                => $this->put('avatar'),
            'signature'                             => $this->put('signature'),
            'student_year'                          => $this->put('student_year')
        ];

        $update_result = $peserta->update_Peserta($id, $data);

        if ($update_result > 0) {
            $this->response([
                'status' => true,
                'message' => 'NEW Student Updated'
            ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'status' => false,
                'message' => 'FAILDE TO Updated Student'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }
}
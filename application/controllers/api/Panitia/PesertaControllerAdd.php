<?php

use Restserver\Libraries\REST_Controller;

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class PesertaControllerAdd extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('PesertaModel');
    }


    //menambahkan data
    public function addPeserta_post()
    {
        $peserta = new PesertaModel;

        $data = [
            'student_id'                            => $this->post('student_id'),
            'assessment_id'                         => $this->post('assessment_id'),
            'nik'                                   => $this->post('nik'),
            'fullname'                              => $this->post('fullname'),
            'gender'                                => $this->post('gender'),
            'birthplace'                            => $this->post('birthplace'),
            'birthday'                              => $this->post('birthday'),
            'religion'                              => $this->post('religion'),
            'marital_status'                        => $this->post('marital_status'),
            'address'                               => $this->post('address'),
            'id_provinsi'                           => $this->post('id_provinsi'),
            'id_kabupaten'                          => $this->post('id_kabupaten'),
            'id_kecamatan'                          => $this->post('id_kecamatan'),
            'id_kelurahan'                          => $this->post('id_kelurahan'),
            'phone'                                 => $this->post('phone'),
            'email'                                 => $this->post('email'),
            'education'                             => $this->post('education'),
            'department'                            => $this->post('department'),
            'diploma_year'                          => $this->post('diploma_year'),
            'company_id'                            => $this->post('company_id'),
            'assessor_id'                           => $this->post('assessor_id'),
            'resign'                                => $this->post('resign'),
            'graduated'                             => $this->post('graduated'),
            'present'                               => $this->post('present'),
            'competent'                             => $this->post('competent'),
            'total_present'                         => $this->post('total_present'),
            'company_name'                          => $this->post('company_name'),
            'student_reg_no'                        => $this->post('student_reg_no'),
            'student_cert_no'                       => $this->post('student_cert_no'),
            'student_blanko_no'                     => $this->post('student_blanko_no'),
            'pretest'                               => $this->post('pretest'),
            'posttest'                              => $this->post('posttest'),
            'avatar'                                => $this->post('avatar'),
            'signature'                             => $this->post('signature'),
            'student_year'                          => $this->post('student_year')
        ];

        $result = $peserta->insertPeserta($data);

        if ($result > 0) {
            $this->response([
                'status' => true,
                'message' => 'NEW Student Created'
            ], REST_Controller::HTTP_CREATED);
        } else {
            $this->response([
                'status' => false,
                'message' => 'FAILDE TO CREATE Student'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }
}
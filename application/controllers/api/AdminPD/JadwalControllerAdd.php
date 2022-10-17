<?php

use Restserver\Libraries\REST_Controller;

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class JadwalControllerAdd extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('JwlModel');
    }


    public function addJadwal_post()
    {
        $Jwl = new JwlModel;

        $i = $this->db->count_all('tb_material');

        $data = [
            'material_id'                 => $Jwl->idterurut($i),
            'assessment_id'               => $this->post('assessment_id'),
            'material_parent_id'          => $this->post('material_parent_id'),
            'instructor_id'               => $this->post('instructor_id'),
            'material_date'               => $this->post('material_date'),
            'material_time'               => $this->post('material_time'),
            'material_detail'             => $this->post('material_detail'),
            'material_name'               => $this->post('material_name'),
            'material_jpl'                => $this->post('material_jpl'),
            'assistant_jpl'               => $this->post('assistant_jpl'),
            'instructor_honor_check'      => $this->post('instructor_honor_check'),
            'instructor_honor_jpl'        => $this->post('instructor_honor_jpl'),
            'eval_instructor'             => $this->post('eval_instructor'),
            'survey_token'                => $this->post('survey_token'),
        ];

        $result = $Jwl->insertJwl($data);

        if ($result > 0) {
            $this->response([
                'status' => true,
                'message' => 'NEW Jadwal Created'
            ], REST_Controller::HTTP_CREATED);
        } else {
            $this->response([
                'status' => false,
                'message' => 'FAILDE TO CREATE Jadwal'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }
}


/*
            
*/
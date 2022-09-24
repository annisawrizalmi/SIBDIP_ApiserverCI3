<?php

use Restserver\Libraries\REST_Controller;

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class JadwalControllerUpdate extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('JwlModel');
    }

    public function updateJadwal_put($id)
    {

        $Jwl = new JwlModel;
        $data = [
            'material_id'                 => $this->put('material_id'),
            'assessment_id'               => $this->put('assessment_id'),
            'material_parent_id'          => $this->put('material_parent_id'),
            'instructor_id'               => $this->put('instructor_id'),
            'material_date'               => $this->put('material_date'),
            'material_time'               => $this->put('material_time'),
            'material_detail'             => $this->put('material_detail'),
            'material_name'               => $this->put('material_name'),
            'material_jpl'                => $this->put('material_jpl'),
            'assistant_jpl'               => $this->put('assistant_jpl'),
            'instructor_honor_check'      => $this->put('instructor_honor_check'),
            'instructor_honor_jpl'        => $this->put('instructor_honor_jpl'),
            'eval_instructor'             => $this->put('eval_instructor'),
            'survey_token'                => $this->put('survey_token'),
        ];


        $update_result = $Jwl->update_Jwl($id, $data);

        if ($update_result > 0) {
            $this->response([
                'status' => true,
                'message' => 'NEW Jadwal Updated'
            ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'status' => false,
                'message' => 'FAILDE TO Updated Jadwal'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }
}
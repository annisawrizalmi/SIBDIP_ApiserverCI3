<?php

use Restserver\Libraries\REST_Controller;

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class JadwalControllerGet extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('JwlModel');
    }

    public function index_get()
    {
        $Jwl = new JwlModel;
        $result_jwl = $Jwl->get_partial_Jwl();

        if ($result_jwl) {
            $this->response([
                'message' => 'Data Obtained',
                'data' => $result_jwl
            ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'message' => 'Data Not Found',
                'data' => NULL
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }
}
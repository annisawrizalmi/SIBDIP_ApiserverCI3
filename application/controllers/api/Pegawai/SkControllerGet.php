<?php

use Restserver\Libraries\REST_Controller;

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class SkControllerGet extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('SkModel');
    }

    //mendapatkan data
    public function index_get()
    {
        $sk = new SkModel;
        $result_sk = $sk->get_partial_Sk();

        if ($result_sk) {
            $this->response([
                'message' => 'Data Obtained',
                'data' => $result_sk
            ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'message' => 'Data Not Found',
                'data' => NULL
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }
}
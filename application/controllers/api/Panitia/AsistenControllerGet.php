<?php

use Restserver\Libraries\REST_Controller;

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class AsistenControllerGet extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('AsistenModel');
    }


    //mendapatkan data
    public function index_get()
    {
        $asisten = new AsistenModel;
        // $result_as_all = $asisten->get_asisten_all();
        $result_as = $asisten->get_partial_asisten();


        if ($result_as) {
            $this->response([
                'message' => 'Data Obtained',
                'data' => $result_as
            ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'message' => 'Data Not Found',
                'data' => NULL
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }
}
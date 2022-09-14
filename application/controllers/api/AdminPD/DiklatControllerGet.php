<?php

use Restserver\Libraries\REST_Controller;

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class DiklatControllerGet extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('DiklatModel');
    }


    //mendapatkan data
    public function index_get()
    {
        $diklat = new DiklatModel;
        $result_dik = $diklat->get_partial_diklat();

        if ($result_dik) {
            $this->response([
                'message' => 'Data Obtained',
                'data' => $result_dik
            ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'message' => 'Data Not Found',
                'data' => NULL
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }
}
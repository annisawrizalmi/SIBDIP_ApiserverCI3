<?php

use Restserver\Libraries\REST_Controller;

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class PegawaiControllerGet extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('PegawaiModel');
    }

    //mendapatkan data
    public function index_get()
    {
        $pegawai = new PegawaiModel;
        $result_pgw = $pegawai->get_partial_pegawai();

        if ($result_pgw) {
            $this->response([
                'message' => 'Data Obtained',
                'data' => $result_pgw
            ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'message' => 'Data Not Found',
                'data' => NULL
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }
}
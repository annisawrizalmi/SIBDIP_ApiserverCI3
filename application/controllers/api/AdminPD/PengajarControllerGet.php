<?php

use Restserver\Libraries\REST_Controller;

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class PengajarControllerGet extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('PengajarModel');
    }

    public function index_get()
    {
        $pengajar = new PengajarModel;
        $result_pgjr = $pengajar->get_partial_pengajar();

        if ($result_pgjr) {
            $this->response([
                'message' => 'Data Obtained',
                'data' => $result_pgjr
            ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'message' => 'Data Not Found',
                'data' => NULL
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }
}
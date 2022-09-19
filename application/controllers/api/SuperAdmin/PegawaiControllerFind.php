<?php

use Restserver\Libraries\REST_Controller;

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class PegawaiControllerFind extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('PegawaiModel');
    }

    //mendapatkan id
    public function fiPegawai_get($id)
    {
        $Pegawai = new PegawaiModel;
        $result = $Pegawai->editPegawai($id);
        if ($result) {
            $this->response([
                'message' => 'Id Avalaible',
                'data' => $result
            ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'status' => false,
                'message' => 'Id Not Found'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }
}
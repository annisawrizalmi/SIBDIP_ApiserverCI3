<?php

use Restserver\Libraries\REST_Controller;

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class PesertaControllerGet extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('PesertaModel');
    }

    //mendapatkan data
    public function index_get()
    {
        $peserta = new PesertaModel;
        $result_pes = $peserta->get_partial_peserta();

        if ($result_pes) {
            $this->response([
                'message' => 'Data Obtained',
                'data' => $result_pes
            ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'message' => 'Data Not Found',
                'data' => NULL
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }
}
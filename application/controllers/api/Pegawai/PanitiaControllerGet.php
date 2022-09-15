<?php

use Restserver\Libraries\REST_Controller;

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class PanitiaControllerGet extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('PanitiaModel');
    }


    //mendapatkan data
    public function index_get()
    {
        $panitia = new PanitiaModel;
        $result_pan = $panitia->get_partial_panitia();

        if ($result_pan) {
            $this->response([
                'message' => 'Data Obtained',
                'data' => $result_pan
            ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'message' => 'Data Not Found',
                'data' => NULL
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }
}


///{committee_id,committee_front_degree,committee_name,committee_back_degree}
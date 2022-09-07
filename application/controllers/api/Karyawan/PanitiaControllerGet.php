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
        $result_pan = $panitia->get_panitia();

        if ($result_pan) {
            $this->response($result_pan, 200);
        } else {
            $this->response(NULL, 400);
        }
    }
}
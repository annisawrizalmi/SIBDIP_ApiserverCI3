<?php

use Restserver\Libraries\REST_Controller;

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class AbsenPesertaControllerDel extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('AbstaModel');
    }
}
<?php

use Restserver\Libraries\REST_Controller;

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class PengajarControllerDel extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('PengajarModel');
    }

    public function deletePengajar_delete($id)
    {
        $Pengajar = new PengajarModel;

        $result = $Pengajar->delete_Pengajar($id);

        if ($result > 0) {
            $this->response([
                'status' => true,
                'message' => 'Pengajar DELETED'
            ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'status' => false,
                'message' => 'ID Not Found Pengajar'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }
}
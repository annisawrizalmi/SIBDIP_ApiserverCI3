<?php

use Restserver\Libraries\REST_Controller;

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class DiklatControllerDel extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('DiklatModel');
    }


    //menghapus
    public function deleteDiklat_delete($id)
    {

        $diklat = new DiklatModel;

        $result = $diklat->delete_diklat($id);

        if ($result > 0) {
            $this->response([
                'status' => true,
                'message' => 'assessment DELETED'
            ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'status' => false,
                'message' => 'ID Not Found assessment'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }
}
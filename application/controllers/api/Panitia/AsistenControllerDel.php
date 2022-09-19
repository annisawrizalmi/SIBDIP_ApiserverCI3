<?php

use Restserver\Libraries\REST_Controller;

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class AsistenControllerDel extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('AsistenModel');
    }

    //menghapus
    public function deleteAsisten_delete($id)
    {

        $Asisten = new AsistenModel;

        $result = $Asisten->delete_Asisten($id);

        if ($result > 0) {
            $this->response([
                'status' => true,
                'message' => 'Asisten DELETED'
            ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'status' => false,
                'message' => 'ID Not Found Asisten'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }
}
<?php

use Restserver\Libraries\REST_Controller;

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class SkControllerDel extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('SkModel');
    }

    //menghapus
    public function deleteSk_delete($id)
    {

        $Sk = new SkModel;

        $result = $Sk->delete_Sk($id);

        if ($result > 0) {
            $this->response([
                'status' => true,
                'message' => 'Surat Keputusan DELETED'
            ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'status' => false,
                'message' => 'ID Not Found Surat Keputusan'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }
}
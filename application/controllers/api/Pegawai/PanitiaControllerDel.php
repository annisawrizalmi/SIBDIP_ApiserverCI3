<?php

use Restserver\Libraries\REST_Controller;

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class PanitiaControllerDel extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('PanitiaModel');
    }


    //menghapus
    public function deletePanitia_delete($id)
    {

        $panitia = new PanitiaModel;

        $result = $panitia->delete_Panitia($id);

        if ($result > 0) {
            $this->response([
                'status' => true,
                'message' => 'Panitia DELETED'
            ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'status' => false,
                'message' => 'ID Not Found Panitia'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }
}
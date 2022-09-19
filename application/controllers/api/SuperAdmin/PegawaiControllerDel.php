<?php

use Restserver\Libraries\REST_Controller;

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class PegawaiControllerDel extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('PegawaiModel');
    }

    //menghapus
    public function deletePegawai_delete($id)
    {

        $pegawai = new PegawaiModel;

        $result = $pegawai->delete_Pegawai($id);

        if ($result > 0) {
            $this->response([
                'status' => true,
                'message' => 'Pegawai DELETED'
            ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'status' => false,
                'message' => 'ID Not Found Pegawai'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }
}
<?php

use Restserver\Libraries\REST_Controller;

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class JadwalControllerDel extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('JwlModel');
    }

    public function deleteJadwal_delete($id)
    {
        $Jwl = new JwlModel;

        $result = $Jwl->delete_Jwl($id);

        if ($result > 0) {
            $this->response([
                'status' => true,
                'message' => 'Jadwal DELETED'
            ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'status' => false,
                'message' => 'ID Not Found Jadwal'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }
}
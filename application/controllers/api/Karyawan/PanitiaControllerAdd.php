<?php

use Restserver\Libraries\REST_Controller;

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class PanitiaControllerAdd extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('PanitiaModel');
    }


    //menambahkan data
    public function addPanitia_post()
    {
        $panitia = new PanitiaModel;

        $data = [
            'committee_id'              => $this->post('committee_id'),
            'committee_front_degree'    => $this->post('committee_front_degree'),
            'committee_name'            => $this->post('committee_name'),
            'committee_back_degree'     => $this->post('committee_back_degree'),
            'committee_gol'             => $this->post('committee_gol'),
            'committee_pj'              => $this->post('committee_pj'),
            'committee_eselon'          => $this->post('committee_eselon'),
            'committee_active'          => $this->post('committee_active'),
            'committee_date_added'      => $this->post('committee_date_added'),
            'committee_date_updated'    => $this->post('committee_date_updated')
        ];

        $result = $panitia->insertPanitia($data);

        if ($result > 0) {
            $this->response([
                'status' => true,
                'message' => 'NEW Committee Created'
            ], REST_Controller::HTTP_CREATED);
        } else {
            $this->response([
                'status' => false,
                'message' => 'FAILDE TO CREATE Committee'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }
}
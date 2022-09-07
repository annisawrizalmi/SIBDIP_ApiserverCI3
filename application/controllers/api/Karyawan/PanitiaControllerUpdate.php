<?php

use Restserver\Libraries\REST_Controller;

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class PanitiaControllerUpdate extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('PanitiaModel');
    }


    //update data
    public function updatePanitia_put($id)
    {

        $panitia = new PanitiaModel;
        $data = [
            'committee_id'              => $this->put('committee_id'),
            'committee_front_degree'    => $this->put('committee_front_degree'),
            'committee_name'            => $this->put('committee_name'),
            'committee_back_degree'     => $this->put('committee_back_degree'),
            'committee_gol'             => $this->put('committee_gol'),
            'committee_pj'              => $this->put('committee_pj'),
            'committee_eselon'          => $this->put('committee_eselon'),
            'committee_active'          => $this->put('committee_active'),
            'committee_date_added'      => $this->put('committee_date_added'),
            'committee_date_updated'    => $this->put('committee_date_updated')
        ];

        $update_result = $panitia->update_Panitia($id, $data);

        if ($update_result > 0) {
            $this->response([
                'status' => true,
                'message' => 'NEW Committee Updated'
            ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'status' => false,
                'message' => 'FAILDE TO Updated Committee'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }
}
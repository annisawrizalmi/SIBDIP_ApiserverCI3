<?php

use Restserver\Libraries\REST_Controller;

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class DiklatControllerAdd extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('DiklatModel');
    }


    //menambahkan data
    public function addDiklat_post()
    {
        $diklat = new DiklatModel;

        $i = $this->db->count_all('tb_assessment');

        $data = [
            //'assessment_id'                         => $this->post('assessment_id'),
            'assessment_id'                         => $diklat->idterurut($i),
            'assessment_to'                         => $diklat->toterurut($i),
            //'assessment_to'                         => $this->post('assessment_to'),
            'scheme_id'                             => $this->post('scheme_id'),
            'assessment_name'                       => $this->post('assessment_name'),
            'assessment_date_start'                 => $this->post('assessment_date_start'),
            'assessment_date_finish'                => $this->post('assessment_date_finish'),
            'assessment_type'                       => $this->post('assessment_type'),
            'assessment_location'                   => $this->post('assessment_location'),
            'assessment_address'                    => $this->post('assessment_address'),
            'assessment_origin'                     => $this->post('assessment_origin'),
            'assessment_city'                       => $this->post('assessment_city'),
            'assessment_person_in_charge'           => $this->post('assessment_person_in_charge'),
            'assessment_participant'                => $this->post('assessment_participant'),
            'assessment_examinee'                   => $this->post('assessment_examinee'),
            'assessment_graduated'                  => $this->post('assessment_graduated'),
            'assessment_certified'                  => $this->post('assessment_certified'),
            'assessment_total_bk'                   => $this->post('assessment_total_bk'),
            'assessment_date'                       => $this->post('assessment_date'),
            'assessment_tgl_sk'                     => $this->post('assessment_tgl_sk'),
            'assessment_no_sk_penyelenggara'        => $this->post('assessment_no_sk_penyelenggara'),
            'assessment_no_sk_peserta'              => $this->post('assessment_no_sk_peserta'),
            'assessment_no_sk_asesor'               => $this->post('assessment_no_sk_asesor'),
            'assessment_no_sk_evaluasi'             => $this->post('assessment_no_sk_evaluasi'),
            'assessment_tgl_sk_evaluasi'            => $this->post('assessment_tgl_sk_evaluasi'),
            'assessment_meeting_date'               => $this->post('assessment_meeting_date'),
            'assessment_rank_1_name'                => $this->post('assessment_rank_1_name'),
            'assessment_rank_1_average_value'       => $this->post('assessment_rank_1_average_value'),
            'assessment_rank_1_placement'           => $this->post('assessment_rank_1_placement'),
            'assessment_rank_2_name'                => $this->post('assessment_rank_2_name'),
            'assessment_rank_2_average_value'       => $this->post('assessment_rank_2_average_value'),
            'assessment_rank_2_placement'           => $this->post('assessment_rank_2_placement'),
            'assessment_rank_3_name'                => $this->post('assessment_rank_3_name'),
            'assessment_rank_3_average_value'       => $this->post('assessment_rank_3_average_value'),
            'assessment_rank_3_placement'           => $this->post('assessment_rank_3_placement'),
            'assessment_no_sk_uk'                   => $this->post('assessment_no_sk_uk'),
            'assessment_tgl_sk_uk'                  => $this->post('assessment_tgl_sk_uk'),
            'assessment_no_su'                      => $this->post('assessment_no_su'),
            'assessment_tgl_su'                     => $this->post('assessment_tgl_su'),
            'assessment_no_st'                      => $this->post('assessment_no_st'),
            'assessment_tgl_st'                     => $this->post('assessment_tgl_st'),
            'assessment_no_sk_hasil_uk'             => $this->post('assessment_no_sk_hasil_uk'),
            'assessment_tgl_sk_hasil_uk'            => $this->post('assessment_tgl_sk_hasil_uk'),
            'assessment_year'                       => $this->post('assessment_year'),
            'assessment_code_keg'                   => $this->post('assessment_code_keg'),
            'assessment_committee'                  => $this->post('assessment_committee'),
            'assessment_committee_lead'             => $this->post('assessment_committee_lead'),
            'assessment_committee_gol'              => $this->post('assessment_committee_gol'),
            'assessment_honor_pj'                   => $this->post('assessment_honor_pj'),
            'assessment_honor_ketua'                => $this->post('assessment_honor_ketua'),
            'assessment_honor_anggota'              => $this->post('assessment_honor_anggota'),
            'committee_honor_paid'                  => $this->post('committee_honor_paid'),
            'narasumber_honor_paid'                 => $this->post('narasumber_honor_paid'),
            'narasumber_honor_nol'                  => $this->post('narasumber_honor_nol'),
            'assessment_instructor'                 => $this->post('assessment_instructor'),
            'assessment_instructor_gol'             => $this->post('assessment_instructor_gol'),
            'assessment_instructor_pph'             => $this->post('assessment_instructor_pph'),
            'assessment_honor_student'              => $this->post('assessment_honor_student'),
            'assessment_companion'                  => $this->post('assessment_companion'),
            'assessment_honor_outside_instructor'   => $this->post('assessment_honor_outside_instructor'),
            'assessment_honor_inside_instructor'    => $this->post('assessment_honor_inside_instructor'),
            'assessment_honor_assistant'            => $this->post('assessment_honor_assistant'),
            'assessment_honor'                      => $this->post('assessment_honor'),
            'assessment_assessor'                   => $this->post('assessment_assessor'),
            'assessment_assessor_gol'               => $this->post('assessment_assessor_gol'),
            'assessment_assessor_pph'               => $this->post('assessment_assessor_pph'),
            'assessment_assessor_lead'              => $this->post('assessment_assessor_lead'),
            'assessment_assessee'                   => $this->post('assessment_assessee'),
            'assessment_assessee_bk'                => $this->post('assessment_assessee_bk'),
            'assessment_file_assessor'              => $this->post('assessment_file_assessor'),
            'assessment_file_assessee'              => $this->post('assessment_file_assessee'),
            'assessment_honor_paid'                 => $this->post('assessment_honor_paid'),
            'assessment_lock'                       => $this->post('assessment_lock'),
            'assessment_lock_instructor'            => $this->post('assessment_lock_instructor'),
            'assessment_lock_assistant'             => $this->post('assessment_lock_assistant'),
            'assessment_locked'                     => $this->post('assessment_locked'),
            'assessment_finish'                     => $this->post('assessment_finish'),
            'assessment_sent'                       => $this->post('assessment_sent'),
            'assessment_file_xls'                   => $this->post('assessment_file_xls'),
            'assessment_file_hasil_uk'              => $this->post('assessment_file_hasil_uk'),
            'assessment_file_pretest'               => $this->post('assessment_file_pretest'),
            'assessment_file_eva_instructor'        => $this->post('assessment_file_eva_instructor'),
            'assessment_file_eva_committee'         => $this->post('assessment_file_eva_committee'),
            'assessment_date_ppabp'                 => $this->post('assessment_date_ppabp'),
            'assessment_opening_date'               => $this->post('assessment_opening_date'),
            'assessment_opening_no'                 => $this->post('assessment_opening_no'),
            'assessment_opening_invitee'            => $this->post('assessment_opening_invitee'),
            'assessment_opening_event_date'         => $this->post('assessment_opening_event_date'),
            'assessment_opening_event_location'     => $this->post('assessment_opening_event_location'),
            'assessment_opening_event_time'         => $this->post('assessment_opening_event_time'),
            'assessment_calling_participant_no'     => $this->post('assessment_calling_participant_no'),
            'assessment_calling_participant_invitee' => $this->post('assessment_calling_participant_invitee'),
            'assessment_calling_partner'            => $this->post('assessment_calling_partner'),
            'assessment_closing_date'               => $this->post('assessment_closing_date'),
            'assessment_closing_no'                 => $this->post('assessment_closing_no'),
            'assessment_closing_invitee'            => $this->post('assessment_closing_invitee'),
            'assessment_closing_event_date'         => $this->post('assessment_closing_event_date'),
            'assessment_closing_event_location'     => $this->post('assessment_closing_event_location'),
            'assessment_closing_event_time'         => $this->post('assessment_closing_event_time'),
            'pegawai_id'                            => $this->post('pegawai_id'),
            'assessment_delay'                      => $this->post('assessment_delay'),
            'assessment_filter'                     => $this->post('assessment_filter'),
            'lock_instructor'                       => $this->post('lock_instructor'),
            'lock_assistant'                        => $this->post('lock_assistant'),
            'lock_student'                          => $this->post('lock_student'),
            'lock_resign'                           => $this->post('lock_resign'),
            'lock_graduated'                        => $this->post('lock_graduated'),
            'lock_schedule'                         => $this->post('lock_schedule'),
            'lock_assessee'                         => $this->post('lock_assessee'),
            'lock_present'                          => $this->post('lock_present'),
            'lock_uk'                               => $this->post('lock_uk'),
            'lock_kub'                              => $this->post('lock_kub'),
            'lock_lap'                              => $this->post('lock_lap'),
            'lock_doc'                              => $this->post('lock_doc'),
            'lock_eval'                             => $this->post('lock_eval'),
            'eval_committee'                        => $this->post('eval_committee'),
            'assessment_reg_start_no'               => $this->post('assessment_reg_start_no'),
            'assessment_cert_start_no'              => $this->post('assessment_cert_start_no'),
            'assessment_blanko_start_no'            => $this->post('assessment_blanko_start_no'),
            'assessment_no_permohonan'              => $this->post('assessment_no_permohonan'),
            'assessment_tgl_permohonan'             => $this->post('assessment_tgl_permohonan'),
            'assessment_kode_jadwal'                => $this->post('assessment_kode_jadwal'),
            'assessment_no_penggantian'             => $this->post('assessment_no_penggantian'),
            'assessment_tgl_penggantian'            => $this->post('assessment_tgl_penggantian'),
            'assessment_no_ba'                      => $this->post('assessment_no_ba'),
            'assessment_tgl_ba'                     => $this->post('assessment_tgl_ba'),
            'assessment_tgl_bast'                   => $this->post('assessment_tgl_bast'),
            'assessment_no_bast'                    => $this->post('assessment_no_bast'),
            'assessment_bast_sender'                => $this->post('assessment_bast_sender'),
            'assessment_bast_receiver'              => $this->post('assessment_bast_receiver'),
            'bast_receiver_phone'                   => $this->post('bast_receiver_phone'),
            'shipping_method'                       => $this->post('shipping_method'),
            'shipping_service'                      => $this->post('shipping_service'),
            'shipping_awb'                          => $this->post('shipping_awb'),
            'assessment_date_added'                 => $this->post('assessment_date_added'),
            'assessment_date_updated'               => $this->post('assessment_date_updated'),
            'accepted'                              => $this->post('accepted'),
            'token'                                 => $this->post('token'),
            'photo_open'                            => $this->post('photo_open'),
            'photo_middle'                          => $this->post('photo_middle'),
            'photo_close'                           => $this->post('photo_close'),
            'tuk_tgl_st'                            => $this->post('tuk_tgl_st'),
            'tuk_no_st'                             => $this->post('tuk_no_st'),
            'tuk_verification_date'                 => $this->post('tuk_verification_date'),
            'tuk_verificator'                       => $this->post('tuk_verificator'),
            'tuk_type'                              => $this->post('tuk_type'),
            'tuk_name'                              => $this->post('tuk_name'),
            'tuk_room'                              => $this->post('tuk_room'),
            'tuk_address'                           => $this->post('tuk_address'),
        ];

        $result = $diklat->insertDiklat($data);

        if ($result > 0) {
            $this->response([
                'status' => true,
                'message' => 'NEW Diklat Created'
            ], REST_Controller::HTTP_CREATED);
        } else {
            $this->response([
                'status' => false,
                'message' => 'FAILDE TO CREATE Diklat'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }
}
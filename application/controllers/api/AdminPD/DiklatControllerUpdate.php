<?php

use Restserver\Libraries\REST_Controller;

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class DiklatControllerUpdate extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('DiklatModel');
    }


    //update data
    public function updateDiklat_put($id)
    {

        $diklat = new DiklatModel;
        $data = [
            'assessment_id'                         => $this->put('assessment_id'),
            'assessment_to'                         => $this->put('assessment_to'),
            'scheme_id'                             => $this->put('scheme_id'),
            'assessment_name'                       => $this->put('assessment_name'),
            'assessment_date_start'                 => $this->put('assessment_date_start'),
            'assessment_date_finish'                => $this->put('assessment_date_finish'),
            'assessment_type'                       => $this->put('assessment_type'),
            'assessment_location'                   => $this->put('assessment_location'),
            'assessment_address'                    => $this->put('assessment_address'),
            'assessment_origin'                     => $this->put('assessment_origin'),
            'assessment_city'                       => $this->put('assessment_city'),
            'assessment_person_in_charge'           => $this->put('assessment_person_in_charge'),
            'assessment_participant'                => $this->put('assessment_participant'),
            'assessment_examinee'                   => $this->put('assessment_examinee'),
            'assessment_graduated'                  => $this->put('assessment_graduated'),
            'assessment_certified'                  => $this->put('assessment_certified'),
            'assessment_total_bk'                   => $this->put('assessment_total_bk'),
            'assessment_date'                       => $this->put('assessment_date'),
            'assessment_tgl_sk'                     => $this->put('assessment_tgl_sk'),
            'assessment_no_sk_penyelenggara'        => $this->put('assessment_no_sk_penyelenggara'),
            'assessment_no_sk_peserta'              => $this->put('assessment_no_sk_peserta'),
            'assessment_no_sk_asesor'               => $this->put('assessment_no_sk_asesor'),
            'assessment_no_sk_evaluasi'             => $this->put('assessment_no_sk_evaluasi'),
            'assessment_tgl_sk_evaluasi'            => $this->put('assessment_tgl_sk_evaluasi'),
            'assessment_meeting_date'               => $this->put('assessment_meeting_date'),
            'assessment_rank_1_name'                => $this->put('assessment_rank_1_name'),
            'assessment_rank_1_average_value'       => $this->put('assessment_rank_1_average_value'),
            'assessment_rank_1_placement'           => $this->put('assessment_rank_1_placement'),
            'assessment_rank_2_name'                => $this->put('assessment_rank_2_name'),
            'assessment_rank_2_average_value'       => $this->put('assessment_rank_2_average_value'),
            'assessment_rank_2_placement'           => $this->put('assessment_rank_2_placement'),
            'assessment_rank_3_name'                => $this->put('assessment_rank_3_name'),
            'assessment_rank_3_average_value'       => $this->put('assessment_rank_3_average_value'),
            'assessment_rank_3_placement'           => $this->put('assessment_rank_3_placement'),
            'assessment_no_sk_uk'                   => $this->put('assessment_no_sk_uk'),
            'assessment_tgl_sk_uk'                  => $this->put('assessment_tgl_sk_uk'),
            'assessment_no_su'                      => $this->put('assessment_no_su'),
            'assessment_tgl_su'                     => $this->put('assessment_tgl_su'),
            'assessment_no_st'                      => $this->put('assessment_no_st'),
            'assessment_tgl_st'                     => $this->put('assessment_tgl_st'),
            'assessment_no_sk_hasil_uk'             => $this->put('assessment_no_sk_hasil_uk'),
            'assessment_tgl_sk_hasil_uk'            => $this->put('assessment_tgl_sk_hasil_uk'),
            'assessment_year'                       => $this->put('assessment_year'),
            'assessment_code_keg'                   => $this->put('assessment_code_keg'),
            'assessment_committee'                  => $this->put('assessment_committee'),
            'assessment_committee_lead'             => $this->put('assessment_committee_lead'),
            'assessment_committee_gol'              => $this->put('assessment_committee_gol'),
            'assessment_honor_pj'                   => $this->put('assessment_honor_pj'),
            'assessment_honor_ketua'                => $this->put('assessment_honor_ketua'),
            'assessment_honor_anggota'              => $this->put('assessment_honor_anggota'),
            'committee_honor_paid'                  => $this->put('committee_honor_paid'),
            'narasumber_honor_paid'                 => $this->put('narasumber_honor_paid'),
            'narasumber_honor_nol'                  => $this->put('narasumber_honor_nol'),
            'assessment_instructor'                 => $this->put('assessment_instructor'),
            'assessment_instructor_gol'             => $this->put('assessment_instructor_gol'),
            'assessment_instructor_pph'             => $this->put('assessment_instructor_pph'),
            'assessment_honor_student'              => $this->put('assessment_honor_student'),
            'assessment_companion'                  => $this->put('assessment_companion'),
            'assessment_honor_outside_instructor'   => $this->put('assessment_honor_outside_instructor'),
            'assessment_honor_inside_instructor'    => $this->put('assessment_honor_inside_instructor'),
            'assessment_honor_assistant'            => $this->put('assessment_honor_assistant'),
            'assessment_honor'                      => $this->put('assessment_honor'),
            'assessment_assessor'                   => $this->put('assessment_assessor'),
            'assessment_assessor_gol'               => $this->put('assessment_assessor_gol'),
            'assessment_assessor_pph'               => $this->put('assessment_assessor_pph'),
            'assessment_assessor_lead'              => $this->put('assessment_assessor_lead'),
            'assessment_assessee'                   => $this->put('assessment_assessee'),
            'assessment_assessee_bk'                => $this->put('assessment_assessee_bk'),
            'assessment_file_assessor'              => $this->put('assessment_file_assessor'),
            'assessment_file_assessee'              => $this->put('assessment_file_assessee'),
            'assessment_honor_paid'                 => $this->put('assessment_honor_paid'),
            'assessment_lock'                       => $this->put('assessment_lock'),
            'assessment_lock_instructor'            => $this->put('assessment_lock_instructor'),
            'assessment_lock_assistant'             => $this->put('assessment_lock_assistant'),
            'assessment_locked'                     => $this->put('assessment_locked'),
            'assessment_finish'                     => $this->put('assessment_finish'),
            'assessment_sent'                       => $this->put('assessment_sent'),
            'assessment_file_xls'                   => $this->put('assessment_file_xls'),
            'assessment_file_hasil_uk'              => $this->put('assessment_file_hasil_uk'),
            'assessment_file_pretest'               => $this->put('assessment_file_pretest'),
            'assessment_file_eva_instructor'        => $this->put('assessment_file_eva_instructor'),
            'assessment_file_eva_committee'         => $this->put('assessment_file_eva_committee'),
            'assessment_date_ppabp'                 => $this->put('assessment_date_ppabp'),
            'assessment_opening_date'               => $this->put('assessment_opening_date'),
            'assessment_opening_no'                 => $this->put('assessment_opening_no'),
            'assessment_opening_invitee'            => $this->put('assessment_opening_invitee'),
            'assessment_opening_event_date'         => $this->put('assessment_opening_event_date'),
            'assessment_opening_event_location'     => $this->put('assessment_opening_event_location'),
            'assessment_opening_event_time'         => $this->put('assessment_opening_event_time'),
            'assessment_calling_participant_no'     => $this->put('assessment_calling_participant_no'),
            'assessment_calling_participant_invitee' => $this->put('assessment_calling_participant_invitee'),
            'assessment_calling_partner'            => $this->put('assessment_calling_partner'),
            'assessment_closing_date'               => $this->put('assessment_closing_date'),
            'assessment_closing_no'                 => $this->put('assessment_closing_no'),
            'assessment_closing_invitee'            => $this->put('assessment_closing_invitee'),
            'assessment_closing_event_date'         => $this->put('assessment_closing_event_date'),
            'assessment_closing_event_location'     => $this->put('assessment_closing_event_location'),
            'assessment_closing_event_time'         => $this->put('assessment_closing_event_time'),
            'pegawai_id'                            => $this->put('pegawai_id'),
            'assessment_delay'                      => $this->put('assessment_delay'),
            'assessment_filter'                     => $this->put('assessment_filter'),
            'lock_instructor'                       => $this->put('lock_instructor'),
            'lock_assistant'                        => $this->put('lock_assistant'),
            'lock_student'                          => $this->put('lock_student'),
            'lock_resign'                           => $this->put('lock_resign'),
            'lock_graduated'                        => $this->put('lock_graduated'),
            'lock_schedule'                         => $this->put('lock_schedule'),
            'lock_assessee'                         => $this->put('lock_assessee'),
            'lock_present'                          => $this->put('lock_present'),
            'lock_uk'                               => $this->put('lock_uk'),
            'lock_kub'                              => $this->put('lock_kub'),
            'lock_lap'                              => $this->put('lock_lap'),
            'lock_doc'                              => $this->put('lock_doc'),
            'lock_eval'                             => $this->put('lock_eval'),
            'eval_committee'                        => $this->put('eval_committee'),
            'assessment_reg_start_no'               => $this->put('assessment_reg_start_no'),
            'assessment_cert_start_no'              => $this->put('assessment_cert_start_no'),
            'assessment_blanko_start_no'            => $this->put('assessment_blanko_start_no'),
            'assessment_no_permohonan'              => $this->put('assessment_no_permohonan'),
            'assessment_tgl_permohonan'             => $this->put('assessment_tgl_permohonan'),
            'assessment_kode_jadwal'                => $this->put('assessment_kode_jadwal'),
            'assessment_no_penggantian'             => $this->put('assessment_no_penggantian'),
            'assessment_tgl_penggantian'            => $this->put('assessment_tgl_penggantian'),
            'assessment_no_ba'                      => $this->put('assessment_no_ba'),
            'assessment_tgl_ba'                     => $this->put('assessment_tgl_ba'),
            'assessment_tgl_bast'                   => $this->put('assessment_tgl_bast'),
            'assessment_no_bast'                    => $this->put('assessment_no_bast'),
            'assessment_bast_sender'                => $this->put('assessment_bast_sender'),
            'assessment_bast_receiver'              => $this->put('assessment_bast_receiver'),
            'bast_receiver_phone'                   => $this->put('bast_receiver_phone'),
            'shipping_method'                       => $this->put('shipping_method'),
            'shipping_service'                      => $this->put('shipping_service'),
            'shipping_awb'                          => $this->put('shipping_awb'),
            'assessment_date_added'                 => $this->put('assessment_date_added'),
            'assessment_date_updated'               => $this->put('assessment_date_updated'),
            'accepted'                              => $this->put('accepted'),
            'token'                                 => $this->put('token'),
            'photo_open'                            => $this->put('photo_open'),
            'photo_middle'                          => $this->put('photo_middle'),
            'photo_close'                           => $this->put('photo_close'),
            'tuk_tgl_st'                            => $this->put('tuk_tgl_st'),
            'tuk_no_st'                             => $this->put('tuk_no_st'),
            'tuk_verification_date'                 => $this->put('tuk_verification_date'),
            'tuk_verificator'                       => $this->put('tuk_verificator'),
            'tuk_type'                              => $this->put('tuk_type'),
            'tuk_name'                              => $this->put('tuk_name'),
            'tuk_room'                              => $this->put('tuk_room'),
            'tuk_address'                           => $this->put('tuk_address'),
        ];

        $update_result = $diklat->update_diklat($id, $data);

        if ($update_result > 0) {
            $this->response([
                'status' => true,
                'message' => 'NEW assessment Updated'
            ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'status' => false,
                'message' => 'FAILDE TO Updated assessment'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }
}
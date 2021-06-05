<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Timeline extends CI_Controller
{

   public function __construct()
   {
      parent::__construct();
      cekLogin();
   }


   public function index()
   {
      $data['title'] = 'Academia';
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
      // var_dump($data);
      // die;
      $this->load->view('templates/timeline_header', $data);
      $this->load->view('timeline/index', $data);
      $this->load->view('templates/timeline_footer');
   }
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_profile extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->helper('form');
        $this->load->model('Log_in_model');
        $this->load->model('event_manage');
        $this->load->helper('url');
        $this->load->library('session');
	} 
	public function index() {
        $get_name = $this->session->userdata('username');
        $get_email = $this->session->userdata('email');
        $data['user_data']=$this->Log_in_model->get_user($get_name, $get_email);
        $username = $this->session->userdata('username');
        $user_exist = $this->Log_in_model->check_username_exists($username);
        $results = $this->event_manage->view_event($username);
        $data['results'] = $results;
        $this->load->view('profile', $data);
        
        
    }
    
        
    }


	
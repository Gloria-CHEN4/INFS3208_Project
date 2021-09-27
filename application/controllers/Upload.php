<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->helper('form');
        $this->load->helper(array('form', 'url'));
	} 
	public function index() {
        $this->load->view('layout/header');
        $this->load->view('upload', array('error' => ' '));
        $this->load->view('layout/footer');
    }

    public function do_upload(){
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 4000;
        $config['max_width'] = 1000;
        $config['max_height'] = 2000;
        $this->load->library('upload', $config);
        if(!$this->upload->do_upload('userfile')){
            echo"hello";
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('layout/header');
            $this->load->view('upload', $error);
            $this->load->view('layout/footer');
        }else{
            $data = array('upload_data' => $this->upload->data());
            $this->load->view('layout/header');
            $this->load->view('upload_success', $data);
            $this->load->view('layout/footer');
        }
    }
    
        
 }


	
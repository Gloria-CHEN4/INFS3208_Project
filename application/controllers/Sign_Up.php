<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sign_Up extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->helper('form');
        $this->load->model('Sign_up_model');
        $this->load->helper('url');
	} 
	public function index() {
        
        $this->load->view('layout/header');
        $this->load->view('sign_up_page');
        $this->load->view('layout/footer');
    }
    public function check(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $password_hash = password_hash($password, PASSWORD_DEFAULT);
        $question = $this->input->post('secret');
        $answer = $this->input->post('answer');
        $answer_hash = password_hash($answer, PASSWORD_DEFAULT);
        $email = $this->input->post('email');
        $exist = $this->Sign_up_model->check_username_exists($username);

        $uppercase = preg_match('@[A-Z]@', $password);
        $lowercase = preg_match('@[a-z]@', $password);
        $number    = preg_match('@[0-9]@', $password);
        $specialChars = preg_match('@[^\w]@', $password);

        if($exist){
            //echo"hello";
            if($uppercase && $lowercase && $number && $specialChars && strlen($password) >= 8){
                $data["username"] = $username;
                $this->load->view('layout/header');
                $this->load->view('sign_up_success', $data);
                $this->load->view('layout/footer');
                $this->Sign_up_model->simple_insert($email, $username, $password_hash, $question, $answer_hash);
            }else{
                echo '<script>alert("Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.")</script>';
                //redirect('Sign_Up');
            }
            
        }else{
            $this->load->view('layout/header');
            $this->load->view('sign_up_failure');
            $this->load->view('layout/footer');
        }
	    
    }
        
    }


	
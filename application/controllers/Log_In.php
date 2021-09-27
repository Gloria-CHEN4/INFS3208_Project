<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Log_In extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->helper('form');
        $this->load->model('Log_in_model');
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->helper('cookie');
	} 
	public function index() {
        $this->load->view('layout/header');
        $this->load->view('log_in_page');
        $this->load->view('layout/footer');
    }

    public function Login(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $password_hash = password_hash($password, PASSWORD_DEFAULT);
        $email = $this->input->post('email');
        $checkbox = $this->input->post('checkbox');
        $user_exist = $this->Log_in_model->check_username_exists($username);
        $exist = $this->Log_in_model->check_username_password_exists($username, $password);
        if($user_exist){
            if($exist){
                if($checkbox){
                    echo "a";
                    $this->input->set_cookie('username', $username, 3600*24);
                    $this->input->set_cookie('password', $password, 3600*24);
                    $this->input->set_cookie('email', $email, 3600*24);
                }
                $data["username"] = $username;
                $this->session->set_userdata('username', $username);
                $this->load->view('layout/header');
                $this->load->view('log_in_success', $data);
                $this->load->view('layout/footer');
            }
            else{
                echo $password;
                $this->load->view('layout/header');
                $this->load->view('log_in_failure');
                $this->load->view('layout/footer');
            }

            
        }else{
            $this->load->view('layout/header');
            $this->load->view('log_in_failure');
            $this->load->view('layout/footer');
        }
    }

    public function Logout(){
        // Unset user data
        $this->session->unset_userdata('logged_in');
        $this->session->unset_userdata('username');

        // Set message
        $this->session->set_flashdata('user_loggedout', 'You are now logged out');

        redirect('Log_In');
    }

    public function forget() {
        if ($email = $this->input->post('email')) {
            $user_info = $this->Log_in_model->check_question($email);
            $data['question'] = $user_info['question'];
            $data['email'] = $email;
            $this->load->view('layout/header');
            $this->load->view('enter_answer', $data);
            $this->load->view('layout/footer');
        } else {
            $this->load->view('layout/header');
            $this->load->view('forget_form');
            $this->load->view('layout/footer');
        }
    }
    public function answer_check() {
        $answer = $this->input->post('answer');
        $email = $this->input->post('email');
        $answer_hash = $this->Log_in_model->check_question($email)['answer'];
        if (password_verify($answer, $answer_hash)) {
            $data['email'] = $email;
            $this->load->view('new_password', $data);
        } else {
            echo '<script>alert("Your answer does not match your secret question!")</script>';
        }
    }
    public function new_password() {
        $new_password = $this->input->post('password');
        $email = $this->input->post('email');
        $this->Log_in_model->update_password($new_password, $email);
        redirect('Log_In');
    }
}



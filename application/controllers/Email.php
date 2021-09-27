<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Email extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function send_email()
	{
        $config = Array(
        'protocol' => 'smtp',
        'smtp_host' => 'ssl://smtp.googlemail.com',
        'smtp_port' => '465',
        'smtp_user' => 'name@gmail.com',
        'smtp_pass' => 'password',
        'mailtype' => 'html',
        'starttls' => true,
        'newline' => "\r\n"
    );
        $this->load->library('email',$config);
        
        $this->email->from('name@gmail.com','Your name:');
        $this->email->to('Example@uqconnect.edu.au');
        $this->email->cc('Example@uqconnect.edu.au');
        $this->email->subject('Web info Test');
        $this->email->message('name@gmail.com','Your name:');
        $this->email->send();
	}
}
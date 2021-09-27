<?php 
	class Sign_up_model extends CI_Model{

        public function __construct() {
			parent::__construct();
			$this->load->database();
        }

        public function simple_insert($email, $username, $password, $question, $answer){
			//$password_hash = password_hash($password, PASSWORD_DEFAULT);
			//$answer_hash = password_hash($answer, PASSWORD_DEFAULT);
            $data = array(
                'email' => $email,
                'username' => $username,
				'password' => $password,
				'question' => $question,
				'answer' => $answer
            );
            $this->db->insert('user_data', $data);
        }
		
		public function sign_up($username, $password, $email){
			// Validate
			$this->db->where('username', $username);
            $this->db->where('password', $password);
            $this->db->where('email', $email);
			$result = $this->db->get('user_data');

			if($result->num_rows() == 1){
				return true;
			} else {
				return false;
			}
		}
		// Check username exists
		public function check_username_exists($username){
			$query = $this->db->get_where('user_data', array('username' => $username));
			if(empty($query->row_array())){
				return true;
			} else {
				return false;
			}
        }
        
    }
?>
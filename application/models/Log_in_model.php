<?php 
	class Log_in_model extends CI_Model{

        public function __construct() {
			parent::__construct();
			$this->load->database();
        }

		
		public function Log_in($username, $password, $email){
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
				return false;
			} else {
				return true;
			}
        }

        // Check username matches password
		public function check_username_password_exists($username, $password){
			$query = $this->db->get_where('user_data', array('username' => $username));
			$password_hash = $query->row_array()['password'];
			return password_verify($password, $password_hash);
        }

        public function get_user($username) {
            $query = $this->db->get_where('user_data',
            array('username' => $username));
            return $query->row_array();
        }
		
		public function check_question($email) {
			$query = $this->db->get_where('user_data',
            array('email' => $email));
            return $query->row_array();
		}
		public function update_password($new_password, $email) {
			$this->db->where('email', $email);
			$this->db->update('user_data', array('password'=>password_hash($new_password, PASSWORD_DEFAULT)));
		}
    }
?>
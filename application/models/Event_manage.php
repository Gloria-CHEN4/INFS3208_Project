<?php 
	class Event_manage extends CI_Model{

        public function __construct() {
			parent::__construct();
			$this->load->database();
        }

		
		public function post_event($username, $title, $place, $date) {
            return $this->db->insert('event', array('holder'=>$username,
                'title'=>$title, 
                'place'=>$place,
                'date'=>$date));
        }
        

		public function view_event($username) {
            $query = $this->db->get_where('event', array('holder' => $username));
            return $query->result_array();
        }

        public function all_event($username) {
            $query = $this->db->query("select * from event where holder !='$username'");
            return $query->result_array();
        }

        public function voting($event_id) {
            $voting = $this->db->get_where('event', array('event_id'=>$event_id))->row_array()['voting'];
            $voting = $voting + 1;
            $this->db->where('event_id', $event_id);
            $this->db->update('event', array('voting'=>$voting));
        }

        public function add_calendar($username, $event_id) {
            $this->db->insert('calendar', array('username'=>$username, 'event_id'=>$event_id));
        }

        public function join_id($username) {
            $query = $this->db->get_where('calendar', array('username' => $username));
            return $query->result_array();
        }
        public function select_by_id($id) {
            $query = $this->db->get_where('event', array('event_id' => $id));
            return $query->row_array();
        }
        public function cancel_event($username, $event_id) {
            $this->db->query("Delete from calendar where event_id = '$event_id' and username = '$username'");
        }
        // Check username matches password
		public function check_username_password_exists($username, $password){
			$query = $this->db->get_where('user_data', array('username' => $username, 'password' => $password));
			if(empty($query->row_array())){
				return false;
			} else {
				return true;
			}
        }
        public function like_search($keyword) {
            $query = $this->db->like('title', $keyword, 'both');
            return $query->get('event')->result_array();
        }

        public function get_user($username) {
            $query = $this->db->get_where('user_data',
            array('username' => $username));
            return $query->row_array();
        }
        
    }
?>
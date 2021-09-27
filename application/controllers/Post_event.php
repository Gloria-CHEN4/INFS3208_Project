<?php
    class Post_event extends CI_Controller {
        public function __construct() {
            parent::__construct();
            $this->load->helper('form');
            $this->load->helper('url_helper');
            $this->load->library('session');
            $this->load->model('event_manage');
            $this->load->model('Log_in_model');
        } 
        public function index() {
            $this->load->view('layout/header');
            $this->load->view('post_event_form');
            $this->load->view('layout/footer');
        }
        public function post() {
            $title = $this->input->post('title');
            $date_time = $this->input->post('user_date');
            $place = $this->input->post('place');
            $username = $this->session->userdata('username');
            $this->event_manage->post_event($username, $title, $place, $date_time);
        }
        public function view_my() {
            $username = $this->session->userdata('username');
            $user_exist = $this->Log_in_model->check_username_exists($username);
            $results = $this->event_manage->view_event($username);
            $data['results'] = $results;
            if($user_exist){
                $this->load->view('my_event_list', $data);
            }else{
                redirect("Log_In");
            }
            
        }
        public function view_all() {
            $username = $this->session->userdata('username');
            $results = $this->event_manage->all_event($username);
            $data['results'] = $results;
            $this->load->view('event_list', $data);
        }
        public function join($event_id) {
            $this->event_manage->voting($event_id);
            $username = $this->session->userdata('username');
            $this->event_manage->add_calendar($username, $event_id);
            echo '<script>alert("You have joined event(s) successfully!")</script>';
        }
        public function search() {
            $keyword = $this->input->get('keyword');
            $results = $this->event_manage->like_search($keyword);
            $response = "<ul style='font-family:verdana;font-size: 20px;'>";
            foreach($results as $result) {
                $response = $response."<li style='padding-bottom: 10px;text-decoration: none'><a href=".site_url('Post_event/detail/'.$result['event_id']).">".$result['title']."</a></li>";
            }
            $response = $response."</ul>";
            echo $response;
        }
        public function detail($event_id) {
            $data['event'] = $this->event_manage->select_by_id($event_id);
            $this->load->view('event', $data);
        }
        public function calendar() {
            $username = $this->session->userdata('username');
            $ids = $this->event_manage->join_id($username);
            $events = array();
            foreach($ids as $id) {
                array_push($events, $this->event_manage->select_by_id($id['event_id']));
            }
            $data['results'] = $events;
            $this->load->view('joined_event_list', $data);
        }
        public function remove($event_id) {
            $username = $this->session->userdata('username');
            $this->event_manage->cancel_event($username, $event_id);
            $this->calendar();
        }
    }

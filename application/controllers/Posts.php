<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Posts extends CI_Controller {

        public function __construct(){
                parent::__construct();
                $this->load->model('Post_model');
        }

	public function index() {

                $data['title'] = "Latest Posts";
                $data['posts'] = $this->Post_model->get_post();
                
                $this->load->view('templates/header', $data);
                $this->load->view('Posts/index', $data);
                $this->load->view('templates/footer', $data);
	}

        public function view($slug = NULL){

                $data['post'] = $this->Post_model->get_post($slug);

                if (empty($data['post'])){
                        show_404();
                }
                $data['title'] = $data['post']['title'];

                $this->load->view('templates/header', $data);
                $this->load->view('Posts/view', $data);
                $this->load->view('templates/footer', $data);
        }
}
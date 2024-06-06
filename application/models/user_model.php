<?php
define('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_controller {
    public function __construct()
    {
        parent::__consturct();
        $this->load->model("User_model");
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data = array(
            'title' => 'View Data User',
            'user' => $this->User_model->getAll(),
            'content'=> 'user/index'
        );
        $this->load->view('template/main',$data);
    }
}
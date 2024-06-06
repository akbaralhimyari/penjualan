<?php
defined('BASEPATH') OR exit('No direct script acces allwoed');

class Menu extends CI_Controller {
    public function index()
    {   
        $data = array(
            'content'=> 'dashboard/index.php'
        );
        $this->load->view('template/main',$data);
    }
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

class Login extends REST_Controller {

	function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->model('m_login');
	}

	function index_post(){
        $data = $this->m_login->login(
                                        $this->post('username'),
                                        $this->post('password')
                                        );
        // $data = "test";
        $this->response($data, 200);
    }

}

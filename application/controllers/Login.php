<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

class Login extends REST_Controller {

	function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->model('m_login');
	}

	function index_get(){
        $data = $this->m_login->login(
                                        $this->get('username'),
                                        hash('sha512', $this->get('password'))
                                        );

        $this->response($data, 200);
    }

}

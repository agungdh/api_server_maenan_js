<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

class Login extends REST_Controller {

	function __construct($config = 'rest') {
        parent::__construct($config);
	}

	function index_get(){
        $data = "Hii";
        $this->response($data, 200);
    }

}

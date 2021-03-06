<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

class Catatan extends REST_Controller {

	function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->model('m_catatan');
	}

    function ubah_post(){
        $data = $this->m_catatan->update(
                                        $this->security->xss_clean($this->post('catatan')),
                                        $this->post('id')
                                        );
        // $data = "test";
        $this->response($data, 200);
    }

    function index_post(){
        $data = $this->m_catatan->read_id_user(
                                        $this->post('id')
                                        );
        // $data = "test";
        $this->response($data, 200);
    }

	function read_post(){
        $data = $this->m_catatan->read_id(
                                        $this->post('id')
                                        );
        // $data = "test";
        $this->response($data, 200);
    }

    function hapus_post(){
        $data = $this->m_catatan->hapus(
                                        $this->post('id')
                                        );
        // $data = "test";
        $this->response($data, 200);
    }

    function tambah_post(){
        $data = $this->m_catatan->tambah(
                                        $this->post('id'),
                                        $this->security->xss_clean($this->post('catatan'))
                                        );
        // $data = "test";
        $this->response($data, 200);
    }

}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        if(($this->session->userdata('level')==NULL)){
			redirect('lojin');
		}
	}
	public function index()
	{
		$this->load->view('admin/index_admin');
	}
}


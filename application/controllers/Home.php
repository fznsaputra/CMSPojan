<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        // if(($this->session->userdata('level')!='Admin')){
		// 	redirect('home');
		
		}
	public function index()
	{
		redirect('user/dashboard');
	}
}

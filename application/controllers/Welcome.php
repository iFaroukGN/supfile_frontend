<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->helper('cookie');
	}

	public function index()
	{
		get_cookie('auth');
		$cookie = get_cookie('auth');
		redirect('Authentification');
//		if ($cookie != "") {
//			redirect('Authentification');
//		} else {
//			$this->load->view('parts/header');
//			$this->load->view('parts/navbar');
//			$this->load->view('main');
//			$this->load->view('parts/footer');
//		}
	}
}

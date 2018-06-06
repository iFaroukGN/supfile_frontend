<?php
/**
 * Created by IntelliJ IDEA.
 * User: cedde
 * Date: 04/06/2018
 * Time: 4:10 PM
 */

class Home extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->library("session");
		$this->load->library('Flash');
		$this->load->helper('cookie');
	}

	/**
	 * charger la page d'accueil apres authentification
	 */
	public function index()
	{
		$this->load->view('parts/header');
		$this->load->view('parts/navbar');
		$this->load->view('main');
		$this->load->view('parts/footer');
	}
}

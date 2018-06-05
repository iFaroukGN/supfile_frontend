<?php
/**
 * Created by IntelliJ IDEA.
 * User: cedde
 * Date: 05/06/2018
 * Time: 10:38 AM
 */

class Cookies extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load - helper('cookie');
	}

	public function index()
	{
		set_cookie('cookie_name', 'cookie_value', '3600');
	}

	public function displayCookie()
	{

	}
}

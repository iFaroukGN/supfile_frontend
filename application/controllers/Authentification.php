<?php
/**
 * Created by IntelliJ IDEA.
 * User: cedde
 * Date: 29/05/2018
 * Time: 10:43 AM
 */

class Authentification extends CI_Controller
{
	//url api login
	protected $url = "http://localhost:8080/auth/login/default";

	function __construct()
	{
		parent::__construct();
		$this->load->library("session");
		$this->load->library('Flash');
		$this->load->helper('cookie');
	}

	/**
	 * charger la page d'authentification par defaut
	 */
	public function index()
	{
		$this->load->view('parts/header');
		$this->load->view('authentification');
		$this->load->view('parts/footer');
	}

	/**
	 * inscription par email
	 */
	public function emailSignUp()
	{
		//url api inscription
		$url = "http://localhost:8080/users";

		$username = explode("@", $this->input->post('emailSignUp'));

		$data = array(
			'email' => $this->input->post('emailSignUp'),
			'password' => $this->input->post('passwordSignUp'),
			'username' => $username[0]
		);

		$ch = curl_init($url);

		//encoder la donnee
		$jsonData = json_encode($data);

		//seter type de requete: POST
		curl_setopt($ch, CURLOPT_POST, 1);

		//Attach our encoded JSON string to the POST fields.
		curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);

		//Set the content type to application/json
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));

		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);

		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

		//Execute the request
		$result = curl_exec($ch);

		curl_close($ch);

		$this->index();

	}

	public function facebookSignUp()
	{
	}

	/**
	 * redirection sur la page d'authentification
	 */
	public function authFausse()
	{
		redirect('Authentification');
	}

	/**
	 * Afficher le page d'accueil apres verification d'authentification
	 */
	public function authValide()
	{
		$this->load->view('parts/header');
		$this->load->view('parts/navbar');
		$this->load->view('main');
		$this->load->view('parts/footer');
	}

	function cookie($email)
	{
		$userEmail = explode("@", $email);
		$value = $userEmail[0];
		$cookie = array(
			'name' => 'auth',
			'value' => $value,
			'expire' => 86500,
		);

		set_cookie($cookie);
	}

	/**
	 * authentification par mail
	 */
	function emailAuthentification()
	{
		$this->cookie($this->input->post('emailaddress'));

		$data = array(
			'email' => $this->input->post('emailaddress'),
			'password' => $this->input->post('emailpassword')
		);

		//initialiser cUrl
		$ch = curl_init($this->url);

		//encoder la donnee
		$jsonData = json_encode($data);

		//seter type de requete: POST
		curl_setopt($ch, CURLOPT_POST, 1);

		//Attach our encoded JSON string to the POST fields.
		curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);

		//Set the content type to application/json
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));

		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);

		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

		//Execute the request
		$result = curl_exec($ch);

		curl_close($ch);

		if ($result === "") {
			$message = 'Failed login';
			$this->flash->error($message);
			$this->index();
		} else {
//			$token = $result;
			$this->authValide();
		}

	}

	/**
	 * authentification par google account
	 */
	function googleAuthentification()
	{

	}

	/**
	 * authentification par facebook
	 */
	function facebookAuthentification()
	{

	}

	/**
	 * deconnecter un utilisateur
	 */
	function logOut()
	{
		delete_cookie('auth');
		$this->index();
	}
}

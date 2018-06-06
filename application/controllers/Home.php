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

	public function uploadFile()
	{
		$fichier = 'file';

		$config['upload_path'] = './temp/';
		$config['allowed_types'] = '*';
		$config['max_size'] = '16000';
		$config['encrypt_name'] = true;

		$this->load->library('upload', $config);
		if (!$this->upload->do_upload($fichier)) {
			print_r('ne charge pas');
		} else {
			$data = $this->upload->data();
//			print_r($data);
		}

		$url = "http://localhost:8080/resource/upload";

		// initialise the curl request

		$token = get_cookie('token');

//		print_r($data);

// send a file

		$request = curl_init($url);

//
		$cfile = new CURLFile($data['full_path'], $data['file_type'], $data['orig_name']);
		$datafile = array('file' => $cfile);

//		print_r($token);

		curl_setopt($request, CURLOPT_HTTPHEADER, array(
			'Authorization: Bearer ' . $token,
			'Content-Type: multipart/form-data'
		));

		curl_setopt($request, CURLOPT_POST, true);

		curl_setopt(
			$request,
			CURLOPT_POSTFIELDS,
			$datafile);

// output the response
		curl_setopt($request, CURLOPT_RETURNTRANSFER, true);

//		print_r($token);
		curl_exec($request);

// close the session
		curl_close($request);

		$message = 'Importation du fichier ' .$data['orig_name'] . ' réussie';
		$this->flash->success($message);

	}
}

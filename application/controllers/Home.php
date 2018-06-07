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

	/**
	 * Charger un fichier,
	 * Nimporte quel type de fichier
	 *
	 */
	public function uploadFile()
	{
		//API url
		$url = "http://localhost:8080/resource/upload";

		$fichier = 'file';

		$config['upload_path'] = './temp/';
		$config['allowed_types'] = '*';
		$config['max_size'] = '16000';
		$config['encrypt_name'] = true;

		$this->load->library('upload', $config);
		if (!$this->upload->do_upload($fichier)) {
			$message = 'Upload failed';
			$this->flash->error($message);
		} else {
			$data = $this->upload->data();
		}

		//token pour les appels API
		$token = get_cookie('token');

		//initialiser une requete CURL
		$request = curl_init($url);

		// creer un objet CURLFile avec en parametre le fichier chargé
		$cfile = new CURLFile($data['full_path'], $data['file_type'], $data['orig_name']);
		$datafile = array('file' => $cfile);

		//header de la requete
		curl_setopt($request, CURLOPT_HTTPHEADER, array(
			'Authorization: Bearer ' . $token,
			'Content-Type: multipart/form-data'
		));

		curl_setopt($request, CURLOPT_POST, true);

		curl_setopt(
			$request,
			CURLOPT_POSTFIELDS,
			$datafile);

		curl_setopt($request, CURLOPT_RETURNTRANSFER, true);

		//executer la requete
		curl_exec($request);

		//Fermer la session
		curl_close($request);

		$message = 'Importation du fichier ' . $data['orig_name'] . ' réussie';
		$this->flash->success($message);

	}
}

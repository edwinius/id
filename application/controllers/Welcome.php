<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	
	function __construct() {
		parent::__construct();
		$this->load->helper('url');
	}

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		//redirect('https://api.instagram.com/oauth/authorize/?client_id=fe3d84a32640462f8d120e8982d8e820&redirect_uri=http://www.pwtjobs.com/pwtjobs&response_type=code');
		//$this->load->view('page1');
		
		$fields = array(
			'client_id' => 'fe3d84a32640462f8d120e8982d8e820',
			'client_secret' => '3e9a9c488fea4ca4bc5ce9953fc13049',
			'grant_type' => 'authorization_code',
			'redirect_uri' => 'http://www.pwtjobs.com/pwtjobs',
			'code' => 'e7a3074cd7f148f797109554ecd28939'
		);
		
		$url = 'https://api.instagram.com/oauth/access_token';
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_TIMEOUT, 20);
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
		$result = curl_exec($ch);
		curl_close($ch);
		$result = json_decode($result);
		print_r($result);
	}
	
	public function test() {
		$this->load->view('page1');
	}

	public function new_func() {
		echo 'blabla';
	}
}

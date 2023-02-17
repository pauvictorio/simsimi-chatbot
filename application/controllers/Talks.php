<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Talks extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("Talk");
	}

	public function index()
	{
		$this->load->view('index');
	}

	public function index_html()
	{
		$data['chats'] = $this->Talk->get_all_chats();
		$this->load->view('partials/talks', $data);
	}

	public function converse()
	{
		$utext = $this->input->post('utext', TRUE);

		$url = 'https://wsapi.simsimi.com/190410/talk';
		$headers = array(
			'Content-Type: application/json',
			'x-api-key: Hq88XNN0N.Tc8itUDAJY.Uo~Lz~gyhB77kdQkDiM'
		);
		$data = array(
			'utext' => $utext,
			'lang' => 'en'
		);
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_POST, TRUE);
		curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
		$response = curl_exec($ch);
		$info = curl_getinfo($ch);
		curl_close($ch);

		$data = json_decode($response, TRUE);

		$atext = $data['atext'];

		$this->Talk->insert_chat($utext, $atext);
	}
}

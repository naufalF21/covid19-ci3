<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public $API = 'https://data.covid19.go.id/public/api/update.json';

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$covid = json_decode($this->curl->simple_get($this->API));
		$update = (array) $covid->update->penambahan;
		$data = [
			'positif' => $update['jumlah_positif'],
			'meninggal' => $update['jumlah_meninggal'],
			'sembuh' => $update['jumlah_sembuh'],
			'dirawat' => $update['jumlah_dirawat'],
		];

		$this->load->view('home/index', $data);
	}

	public function detail()
	{
		$this->load->view('home/detail');
	}
}
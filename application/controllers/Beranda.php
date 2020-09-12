<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {
	public $API = 'https://data.covid19.go.id/public/api/';

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$covid = json_decode($this->curl->simple_get($this->API . 'update.json'));
		$update = (array) $covid->update->penambahan;
		$data = [
			'positif' => $update['jumlah_positif'],
			'meninggal' => $update['jumlah_meninggal'],
			'sembuh' => $update['jumlah_sembuh'],
			'dirawat' => $update['jumlah_dirawat'],
		];

		$covidProv = json_decode($this->curl->simple_get($this->API . 'prov.json'));
		$data['prov'] = (array) $covidProv->list_data;

		$this->load->view('home/index', $data);
	}
}
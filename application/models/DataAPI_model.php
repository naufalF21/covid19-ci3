<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataAPI_model extends CI_Model {

	public $API = 'https://data.covid19.go.id/public/api/';

	public function totalC19() 
	{
		$data = json_decode(file_get_contents($this->API . 'update.json'), true);

		return [
			'positif' => $data['update']['total']['jumlah_positif'],
			'meninggal' => $data['update']['total']['jumlah_meninggal'],
			'sembuh' => $data['update']['total']['jumlah_sembuh'],
			'dirawat' => $data['update']['total']['jumlah_dirawat'],
			'tanggal' => $data['update']['penambahan']['created'] 
		];
	}

	public function provinsi()
	{
		$data = json_decode(file_get_contents($this->API . 'prov.json'), true);

		return $data['list_data'];
	}

	public function harian()
	{
		$data = json_decode(file_get_contents($this->API . 'update.json'), true);

		return $data['update']['penambahan'];
	}
}
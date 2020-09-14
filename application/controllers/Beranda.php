<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('DataAPI_model', 'data');
	}

	public function index()
	{	
		$data = $this->data->totalC19();
		$data['prov'] = $this->data->provinsi();
		$data['harian'] = $this->data->harian();

		$this->load->view('home/index', $data);
	}

}
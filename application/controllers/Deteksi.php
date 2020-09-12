<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Deteksi extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Deteksi_model', 'deteksi');
	}

	public function index()
	{
		$data['info'] = $this->deteksi->getAll();
		$this->load->view('deteksi-dini/index', $data);
	}

}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Deteksi_model extends CI_Model {
	private $_table = 'deteksi';

	public function getAll()
	{
		return $this->db->get($this->_table)->result_array();
	}

}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lapor_model extends CI_Model {
	private $_table = 'lapor';

	public function post()
	{
		$data = [
			'nama' => $this->input->post('nama'),
			'alamat' => $this->input->post('alamat'),
			'phone' => $this->input->post('phone'),
			'email' => $this->input->post('email'),
			'pesan' => $this->input->post('pesan'),
			'date_created' => date('d F Y'),
		];

		return $this->db->insert($this->_table, $data);
	}

	public function getAll()
	{
		return $this->db->get($this->_table)->result_array();
	}

	public function update($id)
	{
		$data = [
			'nama' => $this->input->post('nama'),
			'alamat' => $this->input->post('alamat'),
			'phone' => $this->input->post('phone'),
			'email' => $this->input->post('email'),
			'pesan' => $this->input->post('pesan'),
			'date_created' => date('d F Y'),
		];
		return $this->db->update($this->_table, $data, ['id' => $id]);
	}

	public function getBy($id) {
		return $this->db->get_where($this->_table, ['id' => $id])->row_array();
	}
}
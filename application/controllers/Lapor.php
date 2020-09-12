<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lapor extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Lapor_model', 'lapor');
    }

    public function index()
    {

        if (!$this->form_validation->run('lapor')) {
            $data['lapor'] = $this->lapor->getAll();
            $this->load->view('lapor/index', $data);

        } else {
            $this->lapor->post();
            $this->session->set_flashdata(
                'message',
                'Laporan telah kami terima'
            );
            redirect('lapor');
        }
    }

    public function update($id)
    {
        $data['lapor'] = $this->lapor->getBy($id);

        if (!$this->form_validation->run('lapor')) {
            $this->load->view('lapor/edit', $data);
        } else {
            $this->lapor->update($id);
            $this->session->set_flashdata(
                'message',
                'Laporan berhasil diubah'
            );
            redirect('lapor');
        }
    }

    public function delete($id)
    {
        $this->db->delete('lapor', ['id' => $id]);
        $this->session->set_flashdata(
                'message',
                'Laporan berhasil dihapus'
            );
        redirect('lapor');
    }
}

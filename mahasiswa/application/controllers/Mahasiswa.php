<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mahasiswa_model');
        $this->load->helper('url');
    }

    public function index()
    {
        $data['mahasiswa'] = $this->Mahasiswa_model->get_data();
        $this->load->view('mahasiswa/index', $data);
    }

    public function tambah()
    {
        $this->load->view('mahasiswa/tambah');
    }

    public function simpan()
    {
        $data = array(
            'nim'     => $this->input->post('nim'),
            'nama'    => $this->input->post('nama'),
            'jurusan' => $this->input->post('jurusan'),
            'alamat'  => $this->input->post('alamat')
        );

        $this->Mahasiswa_model->insert_data($data);
        redirect('mahasiswa');
    }

    public function edit($id)
    {
        $data['mahasiswa'] = $this->Mahasiswa_model->get_by_id($id);
        $this->load->view('mahasiswa/edit', $data);
    }

    public function update()
    {
        $id = $this->input->post('id');

        $data = array(
            'nim'     => $this->input->post('nim'),
            'nama'    => $this->input->post('nama'),
            'jurusan' => $this->input->post('jurusan'),
            'alamat'  => $this->input->post('alamat')
        );

        $this->Mahasiswa_model->update_data($id, $data);
        redirect('mahasiswa');
    }

    public function hapus($id)
    {
        $this->Mahasiswa_model->delete_data($id);
        redirect('mahasiswa');
    }
}

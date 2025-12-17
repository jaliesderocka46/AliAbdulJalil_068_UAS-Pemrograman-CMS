<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        $this->load->database(); // ⬅️ WAJIB ADA
    }

    public function get_data()
    {
        return $this->db->get('mahasiswa')->result();
    }

    public function insert_data($data)
    {
        $this->db->insert('mahasiswa', $data);
    }

    public function get_by_id($id)
    {
        return $this->db->get_where('mahasiswa', ['id' => $id])->row();
    }

    public function update_data($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('mahasiswa', $data);
    }

    public function delete_data($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('mahasiswa');
    }
}

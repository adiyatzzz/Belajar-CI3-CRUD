<?php

class Mahasiswa_model extends CI_Model {
    public function getAllMahasiswa()
    {
        return $this->db->get('hero')->result_array();
    }

    public function tambahDataMahasiswa()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "attack" => $this->input->post('attack', true),
            "hp" => $this->input->post('health', true),
            "role" => $this->input->post('role', true)
        ];

        $this->db->insert('hero', $data);
    }

    public function hapusDataMahasiswa($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('hero');
    }

    public function getMahasiswaById($id)
    {
        return $this->db->get_where('hero', ['id' => $id])->row_array();
    }

    public function ubahDataMahasiswa()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "attack" => $this->input->post('attack', true),
            "hp" => $this->input->post('health', true),
            "role" => $this->input->post('role', true)
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('hero', $data);
    }

    public function cariDataMahasiswa()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('nama', $keyword);
        $this->db->or_like('attack', $keyword);
        $this->db->or_like('hp', $keyword);
        $this->db->or_like('role', $keyword);

        return $this->db->get('hero')->result_array();
    }
}
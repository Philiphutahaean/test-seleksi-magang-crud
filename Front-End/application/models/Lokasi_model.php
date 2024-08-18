<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lokasi_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get_all() {
        $query = $this->db->get('lokasi');
        return $query->result_array();
    }

    public function get_by_id($id) {
        $query = $this->db->get_where('lokasi', array('id' => $id));
        return $query->row_array();
    }

    public function insert($data) {
        $data = array(
            'nama_lokasi' => $data['namaLokasi'],
            'negara' => $data['negara'],
            'provinsi' => $data['provinsi'],
            'kota' => $data['kota']
        );
        return $this->db->insert('lokasi', $data);
    }

    public function update($id, $data) {
        $data = array(
            'nama_lokasi' => $data['namaLokasi'],
            'negara' => $data['negara'],
            'provinsi' => $data['provinsi'],
            'kota' => $data['kota']
        );
        $this->db->where('id', $id);
        return $this->db->update('lokasi', $data);
    }

    public function delete($id) {
        return $this->db->delete('lokasi', array('id' => $id));
    }
}

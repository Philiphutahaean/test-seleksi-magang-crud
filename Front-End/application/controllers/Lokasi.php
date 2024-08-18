<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lokasi extends CI_Controller {

    private $api_url = 'http://localhost:8080/api/lokasi'; // URL API

    public function __construct() {
        parent::__construct();
        $this->load->library('curl');
        $this->load->helper('url');
    }

    public function index() {
        $data['lokasi'] = json_decode($this->curl->simple_get($this->api_url), true);
        $this->load->view('lokasi/index', $data);
    }

    public function tambah() {
        $this->load->view('lokasi/tambah');
    }

    public function simpan() {
        // Mengambil data dari form input
        $data = array(
            'namaLokasi' => $this->input->post('namaLokasi'),
            'negara' => $this->input->post('negara'),
            'provinsi' => $this->input->post('provinsi'),
            'kota' => $this->input->post('kota'),
        );

        // Mengirimkan data POST ke API
        $response = $this->curl->simple_post($this->api_url, json_encode($data), array(CURLOPT_HTTPHEADER => array('Content-Type: application/json')));

        // Mengecek jika response kosong atau tidak
        if ($response) {
            redirect('lokasi');
        } else {
            // Menampilkan error jika ada
            echo "Terjadi kesalahan saat menyimpan data.";
        }
    }

    public function edit($id) {
        $data['lokasi'] = json_decode($this->curl->simple_get($this->api_url . '/' . $id), true);
        $this->load->view('lokasi/edit', $data);
    }

    public function update($id) {
        $data = array(
            'namaLokasi' => $this->input->post('namaLokasi'),
            'negara' => $this->input->post('negara'),
            'provinsi' => $this->input->post('provinsi'),
            'kota' => $this->input->post('kota'),
        );

        $response = $this->curl->simple_put($this->api_url . '/' . $id, json_encode($data), array(CURLOPT_HTTPHEADER => array('Content-Type: application/json')));
        
        if ($response) {
            redirect('lokasi');
        } else {
            echo "Terjadi kesalahan saat memperbarui data.";
        }
    }

    public function hapus($id) {
        $response = $this->curl->simple_delete($this->api_url . '/' . $id);
        
        if ($response) {
            redirect('lokasi');
        } else {
            echo "Terjadi kesalahan saat menghapus data.";
        }
    }
}

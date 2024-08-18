<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proyek_model extends CI_Model {

    private $api_url = 'http://localhost:8080/api'; // URL REST API Anda

    public function get_proyek() {
        $output = $this->curl->simple_get($this->api_url . '/proyek');
        return json_decode($output, true);
    }

    public function get_proyek_by_id($id) {
        $output = $this->curl->simple_get($this->api_url . '/proyek/' . $id);
        return json_decode($output, true);
    }

    public function insert_proyek($data) {
        $this->curl->simple_post($this->api_url . '/proyek', json_encode($data), array(CURLOPT_HTTPHEADER => array('Content-Type: application/json')));
    }

    public function update_proyek($id, $data) {
        $this->curl->simple_put($this->api_url . '/proyek/' . $id, json_encode($data), array(CURLOPT_HTTPHEADER => array('Content-Type: application/json')));
    }

    public function delete_proyek($id) {
        $this->curl->simple_delete($this->api_url . '/proyek/' . $id);
    }
}

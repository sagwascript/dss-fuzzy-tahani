<?php

namespace model;

use model\BaseModel;

class Data extends BaseModel {

    private $id_bidang, $nama_bidang;

    public function __construct($id_bidang, $nama_bidang) {
        $this->id_bidang = $id_bidang;
        $this->nama_bidang = $nama_bidang;
    }

    public function setIdBidang($id_bidang) {
        $this->id_bidang = $id_bidang;
    }

    public function getIdBidang() {
        return $this->id_bidang;
    }

    public function setNamaBidang($nama_bidang) {
        $this->nama_bidang = $nama_bidang;
    }

    public function getNamaBidang() {
        return $this->nama_bidang;
    }

    public function getAll() {
        
    }

    public function getOne($id) {
        
    }

    public function insert($data) {
        
    }

    public function update($id, $data) {
        
    }

    public function delete($id) {
        
    }
}
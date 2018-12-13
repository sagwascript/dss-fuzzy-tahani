<?php

namespace model;

use model\BaseModel;

class Data extends BaseModel {

    private $id_data, $nama, $jenis_pekerjaan, $kondisi_rumah, $jumlah_penghasilan, $jumlah_tanggungan;

    public function __construct($id_data, $nama, $jenis_pekerjaan, $kondisi_rumah, $jumlah_penghasilan, $jumlah_tanggungan) {
        $this->id_data = $id_data;
        $this->nama = $nama;
        $this->jenis_pekerjaan = $jenis_pekerjaan;
        $this->kondisi_rumah = $kondisi_rumah;
        $this->jumlah_penghasilan = $jumlah_penghasilan;
        $this->jumlah_tanggungan = $jumlah_tanggungan;
    }

    public function setIdData($id_data) {
        $this->id_data = $id_data;
    }

    public function getIdData() {
        return $this->id_data;
    }

    public function setNama($nama) {
        $this->nama = $nama;
    }

    public function getNama() {
        return $this->nama;
    }

    public function setJenisPekerjaan($jenis_pekerjaan) {
        $this->jenis_pekerjaan = $jenis_pekerjaan;
    }

    public function getJenisPekerjaan() {
        return $this->jenis_pekerjaan;
    }

    public function setKondisiRumah($kondisi_rumah) {
        $this->kondisi_rumah = $kondisi_rumah;
    }

    public function getKondisiRumah() {
        return $this->kondisi_rumah;
    }
    
    public function setJumlahPenghasilan($jumlah_penghasilan) {
        $this->jumlah_penghasilan = $jumlah_penghasilan;
    }

    public function getJumlahPenghasilan() {
        return $this->jumlah_penghasilan;
    }
    
    public function setJumlahTanggungan($jumlah_tanggungan) {
        $this->jumlah_tanggungan = $jumlah_tanggungan;
    }
    
    public function getJumlahTanggungan() {
        return $this->jumlah_tanggungan;
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
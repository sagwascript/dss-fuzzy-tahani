<?php

namespace model;

use model\BaseModel;

class Himpunan extends BaseModel {

    private $id_himpunan, $bawah, $tengah, $atas, $kelompok;

    public function __construct($id_himpunan, $bawah, $tengah, $atas, $kelompok) {
        $this->id_himpunan = $id_himpunan;
        $this->bawah = $bawah;
        $this->tengah = $tengah;
        $this->atas = $atas;
        $this->kelompok = $kelompok;
    }

    public function setIdHimpunan($id_himpunan) {
        $this->id_himpunan = $id_himpunan;
    }

    public function getIdHimpunan() {
        return $this->id_himpunan;
    }
    
    public function setBawah($bawah) {
        $this->bawah = $bawah;
    }

    public function getBawah() {
        return $this->bawah;
    }
    
    public function setTengah($tengah) {
        $this->tengah = $tengah;
    }

    public function getTengah() {
        return $this->tengah;
    }

    public function setAtas($atas) {
        $this->atas = $atas;
    }

    public function getAtas() {
        return $this->atas;
    }

    public function setKelompok() {
        $this->kelompok = $kelompok;
    }

    public function getKelompok() {
        return $this->kelompok;
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
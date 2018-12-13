<?php

namespace model;

use model\BaseModel;

class HasilFuzzy extends BaseModel {

    private $id_hasil_fuzzy, $id_himpunan, $id_calon_penerima, $f;

    public function __construct($id_hasil_fuzzy, $id_himpunan, $id_calon_penerima, $f) {
        $this->id_hasil_fuzzy = $id_hasil_fuzzy;
        $this->id_himpunan = $id_himpunan;
        $this->id_calon_penerima = $id_calon_penerima;
        $this->f = $f;
    }

    public function setIdHasilFuzzy($id_hasil_fuzzy) {
        $this->id_hasil_fuzzy = $id_hasil_fuzzy;
    }

    public function getIdHasilFuzzy() {
        return $this->id_hasil_fuzzy;
    }

    public function setIdHimpunan($id_himpunan) {
        $this->id_himpunan = $id_himpunan;
    }

    public function getIdHimpunan() {
        return $this->id_himpunan;
    }
    
    public function setIdCalonPenerima($id_calon_penerima) {
        $this->id_calon_penerima = $id_calon_penerima;
    }

    public function getIdCalonPenerima() {
        return $this->id_calon_penerima;
    }
    
    public function setF($f) {
        $this->f = $f;
    }

    public function getF() {
        return $this->f;
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
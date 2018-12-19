<?php

namespace model;

use model\BaseModel;

class Variabel extends BaseModel {

    private $id_variabel, $nama_variabel, $field_akses;

    public function __construct($id_variabel, $nama_variabel, $field_akses) {
        $this->id_variabel = $id_variabel;
        $this->nama_variabel = $nama_variabel;
        $this->field_akses = $field_akses;
    }

    public function setIdVariabel($id_variabel) {
        $this->id_variabel = $id_variabel;
    }

    public function getIdVariabel() {
        return $this->id_variabel;
    }
    
    public function setNamaVariabel($nama_variabel) {
        $this->nama_variabel = $nama_variabel;
    }

    public function getNamaVariabel() {
        return $this->nama_variabel;
    }
    
    public function setFieldAkses($field_akses) {
        $this->field_akses = $field_akses;
    }

    public function getFieldAkses() {
        return $this->field_akses;
    }

    public function getAll() {
        
    }

    public function getByFieldAkses($field_akses) {
        $query = "SELECT id FROM tbl_variabel WHERE field_akses = :field_akses";
        $stmt = self::getDB()->prepare($query);
        $stmt->bindValue(':field_akses', $field_akses);
        $stmt->execute();
    }

}
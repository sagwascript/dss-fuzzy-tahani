<?php

namespace model;

use model\BaseModel;

class Hasil extends BaseModel {

    private $id_hasil, $id_himpunan, $id_calon_penerima, $f;

    public function __construct($id_hasil, $id_himpunan, $id_calon_penerima, $f) {
        $this->id_hasil = $id_hasil;
        $this->id_himpunan = $id_himpunan;
        $this->id_calon_penerima = $id_calon_penerima;
        $this->f = $f;
    }

    public function setIdHasil($id_hasil) {
        $this->id_hasil = $id_hasil;
    }

    public function getIdHasil() {
        return $this->id_hasil;
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

    public function getByIdCalonPenerima($id) {
        $query = "SELECT * FROM hasil_fuzzy WHERE id_calon_penerima = :id_calon_penerima";
        $stmt = self::getDB()->prepare($query);
        $stmt->bindValue(':id_calon_penerima', $id);
        $stmt->execute();
        $result = array();
        
        while($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
            array_push($result, 
            new Hasil($row['id'], $row['id_himpunan'], $row['id_calon_penerima'], $row['f']));
        }

        return $result;
    }

    public function insert($data) {
        $query = "INSERT INTO hasil_fuzzy(id_himpunan, id_calon_penerima, f) VALUES (:id_himpunan, :id_calon_penerima, :f)";
        $stmt = self::getDB()->prepare($query);
        $stmt->bindValue(':id_himpunan', $data['id_himpunan']);
        $stmt->bindValue(':id_calon_penerima', $data['id_calon_penerima']);
        $stmt->bindValue(':f', $data['f']);

        return $stmt->execute();
    }

    public function update($id, $data) {
        
    }

    public function delete($id) {
        
    }
}
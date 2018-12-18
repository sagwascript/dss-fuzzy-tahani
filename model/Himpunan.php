<?php

namespace model;

use model\BaseModel;

class Himpunan extends BaseModel {

    private $id_himpunan, $nama_himpunan, $bawah, $tengah, $atas, $kelompok;

    public function __construct($id_himpunan, $nama_himpunan, $bawah, $tengah, $atas, $kelompok) {
        $this->id_himpunan = $id_himpunan;
        $this->nama_himpunan = $nama_himpunan;
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

    public function setNamaHimpunan($nama_himpunan) {
        $this->nama_himpunan = $nama_himpunan;
    }

    public function getNamaHimpunan() {
        return $this->nama_himpunan;
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
        $query = "SELECT * FROM tbl_himpunan WHERE id = :id";
        $stmt = self::getDB()->prepare($query);
        $stmt->bindValue(':id', $id);
        $stmt->execute();

        $result = $stmt->fetch(\PDO::FETCH_ASSOC);

        return new Himpunan($result['id'], $result['nama_himpunan'], $result['bawah'], $result['tengah'], $result['atas'], $result['kelompok']);
    }

    public function getByKelompok($kelompok) {
        $query = "SELECT * FROM tbl_himpunan WHERE kelompok = :kelompok";
        $stmt = self::getDB()->prepare($query);
        $stmt->bindValue(':kelompok', $kelompok);
        $stmt->execute();

        $result = array();

        while ($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
            array_push($result, 
                new Himpunan($row['id'], $row['nama_himpunan'], $row['bawah'], $row['tengah'], $row['atas'], $row['kelompok']));
        }

        return $result;
    }

    public function getNamaVariabel($kelompok) {
        $query = "SELECT nama_variabel FROM tbl_himpunan INNER JOIN tbl_variabel ON tbl_himpunan.kelompok = tbl_variabel.id WHERE kelompok = :kelompok LIMIT 1";
        $stmt = self::getDB()->prepare($query);
        $stmt->bindValue(':kelompok', $kelompok);
        $stmt->execute();

        $result = $stmt->fetch(\PDO::FETCH_ASSOC);

        return $result['nama_variabel'];
    }

    public function insert($data) {
        
    }

    public function update($id, $data) {
        $query = "UPDATE tbl_himpunan SET nama_himpunan = :nama_himpunan, bawah = :bawah, tengah = :tengah, atas = :atas WHERE id = :id";
        $stmt = self::getDB()->prepare($query);
        $stmt->bindValue(':nama_himpunan', $data['nama_himpunan']);
        $stmt->bindValue(':bawah', $data['bawah']);
        $stmt->bindValue(':tengah', $data['tengah']);
        $stmt->bindValue(':atas', $data['atas']);
        $stmt->bindValue(':id', $id);

        return $stmt->execute();
    }

    public function delete($id) {
        
    }
}
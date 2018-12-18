<?php

namespace model;

use model\BaseModel;

class Data extends BaseModel {

    private $id_data, $nama, $masa_kerja, $usia, $gaji, $jumlah_tanggungan;

    public function __construct($id_data, $nama, $masa_kerja, $usia, $gaji, $jumlah_tanggungan) {
        $this->id_data = $id_data;
        $this->nama = $nama;
        $this->masa_kerja = $masa_kerja;
        $this->usia = $usia;
        $this->gaji = $gaji;
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

    public function setMasaKerja($masa_kerja) {
        $this->masa_kerja = $masa_kerja;
    }

    public function getMasaKerja() {
        return $this->masa_kerja;
    }

    public function setUsia($usia) {
        $this->usia = $usia;
    }

    public function getUsia() {
        return $this->usia;
    }
    
    public function setGaji($gaji) {
        $this->gaji = $gaji;
    }

    public function getGaji() {
        return $this->gaji;
    }
    
    public function setJumlahTanggungan($jumlah_tanggungan) {
        $this->jumlah_tanggungan = $jumlah_tanggungan;
    }
    
    public function getJumlahTanggungan() {
        return $this->jumlah_tanggungan;
    }

    public function getAll() {
        $query = "SELECT * FROM tbl_data";
        $stmt = self::getDB()->prepare($query);
        $stmt->execute();

        $result = array();
        while($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
            array_push($result, 
                new Data($row['id'], $row['nama'], $row['masa_kerja'], $row['usia'], $row['gaji'], $row['jumlah_tanggungan']));
        }
        return $result;
    }
    
    public function getOne($id) {
        $query = "SELECT * FROM tbl_data WHERE id = :id";
        $stmt = self::getDB()->prepare($query);
        $stmt->bindValue(':id', $id);
        $stmt->execute();

        $result = $stmt->fetch(\PDO::FETCH_ASSOC);

        return new Data($result['id'], $result['nama'], $result['masa_kerja'], $result['usia'], $result['gaji'], $result['jumlah_tanggungan']);
    }
    
    public function insert($data) {
        $query = "INSERT INTO tbl_data(nama, masa_kerja, usia, gaji, jumlah_tanggungan) VALUES (:nama, :masa_kerja, :usia, :gaji, :jumlah_tanggungan)";
        $stmt = self::getDB()->prepare($query);
        $stmt->bindValue(':nama', $data['nama']);
        $stmt->bindValue(':masa_kerja', $data['masa_kerja']);
        $stmt->bindValue(':usia', $data['usia']);
        $stmt->bindValue(':gaji', $data['gaji']);
        $stmt->bindValue(':jumlah_tanggungan', $data['jumlah_tanggungan']);
        
        return $stmt->execute();
    }

    public function update($id, $data) {
        $query = "UPDATE tbl_data SET nama = :nama, masa_kerja = :masa_kerja, usia = :usia, gaji = :gaji, jumlah_tanggungan = :jumlah_tanggungan WHERE id = :id";
        $stmt = self::getDB()->prepare($query);
        $stmt->bindValue(':nama', $data['nama']);
        $stmt->bindValue(':masa_kerja', $data['masa_kerja']);
        $stmt->bindValue(':usia', $data['usia']);
        $stmt->bindValue(':gaji', $data['gaji']);
        $stmt->bindValue(':jumlah_tanggungan', $data['jumlah_tanggungan']);
        $stmt->bindValue(':id', $id);

        return $stmt->execute();
    }

    public function delete($id) {
        $query = "DELETE FROM tbl_data WHERE id = :id";
        $stmt = self::getDB()->prepare($query);
        $stmt->bindValue(':id', $id);

        return $stmt->execute();
    }
}
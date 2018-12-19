<?php

namespace controllers;

use lib\Router;
use lib\Helper;
use model\Data;
use model\Himpunan;
use model\Hasil;
use controllers\BaseController;

class DataController extends BaseController {

    public function index() {
        $viewModel = Data::getAll(); 
        $this->renderView($viewModel);
    }

    public function create() {
        $this->renderView();
    }

    public function store() {
        $data = $_POST;

        if (Data::insert($data)) {
            $idCalonPenerima = Data::getLastInsertedId();
            $field_all = ['masa_kerja', 'usia', 'gaji', 'jumlah_tanggungan'];
            for ($i = 1; $i <= 4; $i++) {
                $himpunan = Himpunan::getByKelompok($i);

                $field = $data[$field_all[$i-1]];
                foreach ($himpunan as $himp) {
                    $idHimpunan = $himp->getIdHimpunan();
                    $paramHimpunan['nama_himpunan'] = $himp->getNamaHimpunan();
                    $paramHimpunan['bawah'] = $himp->getBawah();
                    $paramHimpunan['tengah'] = $himp->getTengah();
                    $paramHimpunan['atas'] = $himp->getAtas();

                    switch($i) {
                        case 1:
                            $f = Helper::fungsiKeanggotaanMasaKerja($field, $paramHimpunan);        
                            break;
                        case 2:
                            $f = Helper::fungsiKeanggotaanUsia($field, $paramHimpunan);        
                            break;
                        case 3:
                            $f = Helper::fungsiKeanggotaanGaji($field, $paramHimpunan);        
                            break;
                        case 4:
                            $f = Helper::fungsiKeanggotaanTanggungan($field, $paramHimpunan);        
                            break;
                    }
                    
                    Hasil::insert(['id_himpunan' => $idHimpunan, 'id_calon_penerima' => $idCalonPenerima, 'f' => $f]);
                }
            }
            Router::redirect();
        } else {
            Router::redirect('data/create');
        }
    }

    public function edit($id) {
        $viewModel = Data::getOne($id);

        $this->renderView($viewModel);
    }

    public function update($id) {
        $data = $_POST;
        if (Data::update($id, $data)) {
            Router::redirect();   
        } else {
            Router::redirect('data/edit/'.$id);
        }
    }

    public function delete() {
        $id = $_GET['id'];
        if (Data::delete($id)) {
            Router::redirect();
        }
    }
}
<?php

namespace controllers;

use lib\Router;
use lib\Helper;
use model\Data;
use model\Himpunan;
use controllers\BaseController;

class FuzzifikasiController extends BaseController {

    public function masa_kerja() {
        $data = Data::getAll();
        $himpunan = Himpunan::getByKelompok(1);

        $viewModel['fuzzifikasi_masa_kerja'] = array();

        foreach ($data as $d) {
            $masa_kerja = $d->getMasaKerja();
            $wrap['nama'] = $d->getNama();
            foreach ($himpunan as $himp) {
                $paramHimpunan['nama_himpunan'] = $himp->getNamaHimpunan();
                $paramHimpunan['bawah'] = $himp->getBawah();
                $paramHimpunan['tengah'] = $himp->getTengah();
                $paramHimpunan['atas'] = $himp->getAtas();
                $wrap[$himp->getNamaHimpunan()] = Helper::fungsiKeanggotaanMasaKerja($masa_kerja, $paramHimpunan);
            }
            array_push($viewModel['fuzzifikasi_masa_kerja'], $wrap);    
        }

        $this->renderView($viewModel);
    }

    public function usia() {
        $data = Data::getAll();
        $himpunan = Himpunan::getByKelompok(2);

        $viewModel['fuzzifikasi_usia'] = array();

        foreach ($data as $d) {
            $usia = $d->getUsia();
            $wrap['nama'] = $d->getNama();
            foreach ($himpunan as $himp) {
                $paramHimpunan['nama_himpunan'] = $himp->getNamaHimpunan();
                $paramHimpunan['bawah'] = $himp->getBawah();
                $paramHimpunan['tengah'] = $himp->getTengah();
                $paramHimpunan['atas'] = $himp->getAtas();
                $wrap[$himp->getNamaHimpunan()] = Helper::fungsiKeanggotaanUsia($usia, $paramHimpunan);
            }
            array_push($viewModel['fuzzifikasi_usia'], $wrap);    
        }

        $this->renderView($viewModel);
    }

    public function gaji() {
        $data = Data::getAll();
        $himpunan = Himpunan::getByKelompok(3);

        $viewModel['fuzzifikasi_gaji'] = array();

        foreach ($data as $d) {
            $gaji = $d->getGaji();
            $wrap['nama'] = $d->getNama();
            foreach ($himpunan as $himp) {
                $paramHimpunan['nama_himpunan'] = $himp->getNamaHimpunan();
                $paramHimpunan['bawah'] = $himp->getBawah();
                $paramHimpunan['tengah'] = $himp->getTengah();
                $paramHimpunan['atas'] = $himp->getAtas();
                $wrap[$himp->getNamaHimpunan()] = Helper::fungsiKeanggotaanGaji($gaji, $paramHimpunan);
            }
            array_push($viewModel['fuzzifikasi_gaji'], $wrap);    
        }

        $this->renderView($viewModel);
    }

    public function tanggungan() {
        $data = Data::getAll();
        $himpunan = Himpunan::getByKelompok(4);

        $viewModel['fuzzifikasi_tanggungan'] = array();

        foreach ($data as $d) {
            $tanggungan = $d->getJumlahTanggungan();
            $wrap['nama'] = $d->getNama();
            foreach ($himpunan as $himp) {
                $paramHimpunan['nama_himpunan'] = $himp->getNamaHimpunan();
                $paramHimpunan['bawah'] = $himp->getBawah();
                $paramHimpunan['tengah'] = $himp->getTengah();
                $paramHimpunan['atas'] = $himp->getAtas();
                $wrap[$himp->getNamaHimpunan()] = Helper::fungsiKeanggotaanTanggungan($tanggungan, $paramHimpunan);
            }
            array_push($viewModel['fuzzifikasi_tanggungan'], $wrap);    
        }

        $this->renderView($viewModel);
    }
    
}
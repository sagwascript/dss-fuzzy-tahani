<?php

namespace controllers;

use lib\Router;
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
                $wrap[$himp->getNamaHimpunan()] = self::fungsiKeanggotaanMasaKerja($masa_kerja, $paramHimpunan);
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
                $wrap[$himp->getNamaHimpunan()] = self::fungsiKeanggotaanUsia($usia, $paramHimpunan);
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
                $wrap[$himp->getNamaHimpunan()] = self::fungsiKeanggotaanGaji($gaji, $paramHimpunan);
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
                $wrap[$himp->getNamaHimpunan()] = self::fungsiKeanggotaanTanggungan($tanggungan, $paramHimpunan);
            }
            array_push($viewModel['fuzzifikasi_tanggungan'], $wrap);    
        }

        $this->renderView($viewModel);
    }

    private static function fungsiKeanggotaanUsia($usia, $himpunan) {
        if ($himpunan['nama_himpunan'] == 'Muda') {
            if ($usia <= $himpunan['bawah']) {
                $derajat_keanggotaan = 1;
            } else if ($usia >= $himpunan['bawah'] && $usia <= $himpunan['atas']) {
                $derajat_keanggotaan = ($himpunan['atas'] - $usia) / ($himpunan['atas'] - $himpunan['bawah']);
            } else {
                $derajat_keanggotaan = 0;
            }
        } else if ($himpunan['nama_himpunan'] == 'Parobaya') {
            if ($usia <= $himpunan['bawah'] or $usia >= $himpunan['atas']) {
                $derajat_keanggotaan = 0;
            } else if ($usia >= $himpunan['bawah'] || $usia <= $himpunan['tengah']) {
                $derajat_keanggotaan = ($usia - $himpunan['bawah']) / ($himpunan['tengah'] - $himpunan['bawah']);
            } else if ($usia >= $himpunan['tengah'] && $usia <= $himpunan['atas']) {
                $derajat_keanggotaan = ($himpunan['atas'] - $usia) / ($himpunan['atas'] - $himpunan['tengah']);
            }
        } else if ($himpunan['nama_himpunan'] == 'Tua') {
            if ($usia <= $himpunan['bawah']) {
                $derajat_keanggotaan = 0;
            } else if ($usia >= $himpunan['bawah'] && $usia <= $himpunan['atas']) {
                $derajat_keanggotaan = ($usia - $himpunan['bawah']) / ($himpunan['atas'] - $himpunan['bawah']);
            } else if ($usia >= $himpunan['atas']) {
                $derajat_keanggotaan = 1;
            }
        }

        return $derajat_keanggotaan;
    }

    private static function fungsiKeanggotaanMasaKerja($masa_kerja, $himpunan) {
        if ($himpunan['nama_himpunan'] == 'Baru') {
            if ($masa_kerja <= $himpunan['bawah']) {
                $derajat_keanggotaan = 1;
            } else if ($masa_kerja >= $himpunan['bawah'] && $masa_kerja <= $himpunan['atas']) {
                $derajat_keanggotaan = ($himpunan['atas'] - $masa_kerja) / ($himpunan['atas'] - $himpunan['bawah']);
            } else if ($masa_kerja >= $himpunan['bawah']) {
                $derajat_keanggotaan = 0;
            }
        } else if ($himpunan['nama_himpunan'] == 'Lama') {
            if ($masa_kerja <= $himpunan['bawah']) {
                $derajat_keanggotaan = 0;
            } else if ($masa_kerja >= $himpunan['bawah'] && $masa_kerja <= $himpunan['atas']) {
                $derajat_keanggotaan = ($masa_kerja - $himpunan['bawah']) / ($himpunan['atas'] - $himpunan['bawah']);
            } else if ($masa_kerja >= $himpunan['atas']) {
                $derajat_keanggotaan = 1;
            }
        }

        return $derajat_keanggotaan;
    }

    private static function fungsiKeanggotaanGaji($gaji, $himpunan) {
        if ($himpunan['nama_himpunan'] == 'Rendah') {
            if ($gaji <= $himpunan['bawah']) {
                $derajat_keanggotaan = 1;
            } else if ($gaji >= $himpunan['bawah'] && $gaji <= $himpunan['atas']) {
                $derajat_keanggotaan = ($himpunan['atas'] - $gaji) / ($himpunan['atas'] - $himpunan['bawah']);
            } else if ($gaji >= $himpunan['atas']) {
                $derajat_keanggotaan = 0;
            }
        } else if ($himpunan['nama_himpunan'] == 'Sedang') {
            if ($gaji <= $himpunan['bawah'] || $gaji >= $himpunan['atas']) {
                $derajat_keanggotaan = 0;
            } else if ($gaji >= $himpunan['bawah'] && $gaji <= $himpunan['tengah']) {
                $derajat_keanggotaan = ($gaji - $himpunan['bawah']) / ($himpunan['tengah'] - $himpunan['bawah']);
            } else if ($gaji >= $himpunan['tengah'] && $gaji <= $himpunan['atas']) {
                $derajat_keanggotaan = ($himpunan['atas'] - $gaji) / ($himpunan['atas'] - $himpunan['tengah']);
            }
        } else if ($himpunan['nama_himpunan'] == 'Tinggi') {
            if ($gaji <= $himpunan['bawah']) {
                $derajat_keanggotaan = 0;
            } else if ($gaji >= $himpunan['bawah'] && $gaji <= $himpunan['atas']) {
                $derajat_keanggotaan = ($gaji - $himpunan['bawah']) / ($himpunan['atas'] - $himpunan['bawah']);
            } else if ($gaji >= $himpunan['atas']) {
                $derajat_keanggotaan = 1;
            }
        }

        return $derajat_keanggotaan;
    }

    private static function fungsiKeanggotaanTanggungan($tanggungan, $himpunan) {
        if ($himpunan['nama_himpunan'] == 'Sedikit') {
            if ($tanggungan <= $himpunan['bawah']) {
                $derajat_keanggotaan = 1;
            } else if ($tanggungan >= $himpunan['bawah'] && $tanggungan <= $himpunan['atas']) {
                $derajat_keanggotaan = ($himpunan['atas'] - $tanggungan) / ($himpunan['atas'] - $himpunan['bawah']);
            } else if ($tanggungan >= $himpunan['bawah']) {
                $derajat_keanggotaan = 0;
            }
        } else if ($himpunan['nama_himpunan'] == 'Banyak') {
            if ($tanggungan <= $himpunan['bawah']) {
                $derajat_keanggotaan = 0;
            } else if ($tanggungan >= $himpunan['bawah'] && $tanggungan <= $himpunan['atas']) {
                $derajat_keanggotaan = ($tanggungan - $himpunan['bawah']) / ($himpunan['atas'] - $himpunan['bawah']);
            } else if ($tanggungan >= $himpunan['atas']) {
                $derajat_keanggotaan = 1;
            }
        }

        return $derajat_keanggotaan;
    }
    
}
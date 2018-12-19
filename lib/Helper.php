<?php

namespace lib;

class Helper {

    public static function fungsiKeanggotaanUsia($usia, $himpunan) {
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

    public static function fungsiKeanggotaanMasaKerja($masa_kerja, $himpunan) {
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

    public static function fungsiKeanggotaanGaji($gaji, $himpunan) {
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

    public static function fungsiKeanggotaanTanggungan($tanggungan, $himpunan) {
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
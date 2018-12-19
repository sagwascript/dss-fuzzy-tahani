<?php

namespace controllers;

use lib\Router;
use model\Data;
use model\Himpunan;
use model\Hasil;
use controllers\BaseController;

class HasilController extends BaseController {

    public function index($kelompok) {
        $data = Data::getAll();

        foreach ($data as $d) {
            $hasil = Hasil::getByIdCalonPenerima($d->getIdData());
            $wrap = [$d->getNama(), $d->getMasaKerja(), $d->getUsia(), $d->getGaji(), $d->getJumlahTanggungan()];
            foreach ($hasil as $h) {
                array_push($wrap, $h->getF());
            }
            $wrapData[$d->getIdData()] = $wrap;
        }
        $viewModel['data'] = $wrapData;
        // var_dump($viewModel['data']);
        $this->renderView($viewModel);
    }

}
<?php

namespace controllers;

use lib\Router;
use model\Himpunan;
use controllers\BaseController;

class HimpunanController extends BaseController {

    public function index($kelompok) {
        // $viewModel = Himpunan::getAll(); 
        // $this->renderView($viewModel);
    }

    public function kelompok($kelompok) {
        $viewModel['nama_variabel'] = Himpunan::getNamaVariabel($kelompok);
        $viewModel['data'] = Himpunan::getByKelompok($kelompok); 
        $this->renderView($viewModel);
    }

    // public function create() {
    //     $this->renderView();
    // }

    // public function store() {
    //     $data = $_POST;

    //     if (Data::insert($data)) {
    //         Router::redirect();
    //     } else {
    //         Router::redirect('data/create');
    //     }
    // }

    public function edit($id) {
        $viewModel = Himpunan::getOne($id);

        $this->renderView($viewModel);
    }

    public function update($id) {
        $data = $_POST;
        if (Himpunan::update($id, $data)) {
            Router::redirect('himpunan/kelompok/'.$data['kelompok']);   
        } else {
            Router::redirect('himpunan/edit/'.$id);
        }
    }

    // public function delete() {
    //     $id = $_GET['id'];
    //     if (Data::delete($id)) {
    //         Router::redirect();
    //     }
    // }
}
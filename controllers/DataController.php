<?php

namespace controllers;

use lib\Router;
use model\Data;
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
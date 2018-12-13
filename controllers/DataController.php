<?php

namespace controllers;

use lib\Router;
// use model\Data;
use controllers\BaseController;

class DataController extends BaseController {

    public function index() {
        // $viewModel['title'] = "Data Bidang";
        // $viewModel['data'] = Bidang::getAll();
        $this->renderView();
    }
}
<?php

namespace controllers;

use controllers\BaseController;
use controllers\DataController;

class HomeController extends BaseController {

    protected function index() {
        $dataController = new DataController($this->action, $this->urlParams);
        $dataController->index();
    }

}
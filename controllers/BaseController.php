<?php

namespace controllers;

abstract class BaseController {
    
    protected $urlParams;
    protected $action;

    public function __construct($action, $urlParams) {
        $this->action = $action;
        $this->urlParams = $urlParams;
    }

    public function executeAction() {
        return $this->{$this->action}($this->urlParams['id']);
    }

    protected function renderView($viewModel = "", $fullView = true) {
        $classData = explode("\\", get_class($this));
        $className = end($classData);
        
        $classNameArr = preg_split('/(?=[A-Z])/', lcfirst($className)); // split string by it's uppercase letter
        array_pop($classNameArr); // Remove the 'Controller' string
        
        if (count($classNameArr) > 1) {
            $className = implode('_', $classNameArr);
        } else {
            $className = $classNameArr[0];
        }

        $className = strtolower($className);

        $content = __DIR__. "/../views/" .$className. "/" .$this->action. ".php";

        if ($fullView) {
            require __DIR__ . "/../views/template.php";
        } else {
            require $content;
        }
    }
}
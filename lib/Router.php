<?php

namespace lib;

class Router {
    
    private $controller;
    private $action;
    private $urlParams;

    private $Controller_Namespace = "\\controllers\\";
    private $Base_Controller_Name = "controllers\\BaseController";
    
    public function __construct($urlParams) {

        $this->urlParams = $urlParams;
        
        if (empty($this->urlParams["controller"])) {
            $this->controller = $this->Controller_Namespace."HomeController";
        } else {
            $controllerName = explode('_', $urlParams['controller']);
            if (count($controllerName) > 1) {
                foreach ($controllerName as $key=>$value) {
                    $controllerName[$key] = ucfirst($value);
                }
                $controllerName = implode(null, $controllerName);
            } else {
                $controllerName = ucfirst($controllerName[0]);
            }

            $controllerName = $controllerName. "Controller";
            $this->controller = $this->Controller_Namespace . $controllerName;
        }

        if (empty($this->urlParams["action"])) {
            $this->action = "index";
        } else {
            $this->action = $this->urlParams["action"];
        }
    }

    public function getController() {
        if (class_exists($this->controller)) {
            $parent = class_parents($this->controller);

            if (in_array($this->Base_Controller_Name, $parent)) {
                if (method_exists($this->controller, $this->action)) {
                    return new $this->controller($this->action, $this->urlParams);
                } else {
                    throw new \Exception("Action not found");
                }
            } else {
                throw new \Exception("Wrong class for controller. Not derived from BaseController");
            }
        } else {
            throw new \Exception("Controller not found.");
        }
    }

    public static function redirect($destination = "") {
        $url = $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
        $url = explode("/", $url);

        $baseUrl = $url[1];

        header("Location: http://localhost/" . $baseUrl . "/" . $destination);
        die();
    } 
}

<?php

require_once __DIR__ . "/Autoloader.php";

use lib\Router;

$kernel = new Router($_GET);
$controller = $kernel->getController();
$controller->ExecuteAction();

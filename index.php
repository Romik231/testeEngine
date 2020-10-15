<?php

use core\Request;
use core\Route;

require_once "vendor/autoload.php";

$init = (new Route(new Request()))->init();

echo $init;



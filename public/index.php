<?php

define('APP_PATH', __DIR__ . '/../');

include APP_PATH . 'library/Ps4AutoloaderClass.php';

$loader = new Psr4AutoloaderClass();

$loader->addNamespace('classes','src');
$loader->register();

/*
set_include_path(get_include_path().PATH_SEPARATOR.__DIR__.'/../library/PHPMailer');

function __autoload($classname){
    echo $classname;
}

function autoloadApp($classname){
    include "src/classes/$classname.php";
} 
*/

include APP_PATH . 'src/index.php';
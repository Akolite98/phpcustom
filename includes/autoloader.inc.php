<?php 

$classname = 'jarry';

spl_autoload_register('autoload');

function autoload($classname){
    $path = "../classes/";
    $ext  = ".class.php";
    $filename = $path.$classname.$ext;

    if(!file_exists($filename)){
        false;
    }
    

    require_once $filename;
}
<?php 

$classname = 'jarry';

spl_autoload_register('autoload');



function autoload($classname){
    $path = "../classes/";
    $ext  = ".class.php";
    $filename = $path.$classname.$ext;
    $coresList = ['Globals'];

    if(!file_exists($filename)){
        false;
    }
    
    require_once $filename;
}

function check_And_Autoload_Core_Files($classname, $coresList){
    if(!in_array($classname, $coresList)){
        return false;
    }else{
        require_once "../classes/App/Core/".$classname.".class.php";
    }
}
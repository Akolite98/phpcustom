<?php
namespace App\Core;

class Globals{

    public static function view($name){
        require_once '../assets/views/'.$name;
    }


    public static function extends($fileName){
        require_once '../assets/views/'.$fileName;
    }

    public static function assets($filename){
        
    }
}
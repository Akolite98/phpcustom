<?php
namespace App\Core;

class Globals{

    public static function view($name){
        require_once './assets/views/'.$name;
    }
}
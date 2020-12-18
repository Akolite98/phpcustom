<?php
namespace App\Core;

use App\Core\Template;

class Globals{

    public static function extends($fileName){
        require_once '../assets/views/'.$fileName;
    }

    public static function assets($filename){
        $fileUrl = "$_SERVER[REQUEST_SCHEME]://"."$_SERVER[HTTP_HOST]"."/".$filename;
        return $fileUrl;
    }

    public static function view($name){
        require_once '../assets/views/'.$name;
    }
}
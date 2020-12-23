<?php
namespace App\Core;

use App\Core\Template;

class Globals{
    public static function extends($fileName){
        require_once '../assets/views/'.$fileName.'.template.php';
    }

    public static function assets($filename){
        $fileUrl = "$_SERVER[REQUEST_SCHEME]://"."$_SERVER[HTTP_HOST]"."/".$filename;
        echo $fileUrl;
    }

    public static function view($name){
        require_once '../assets/views/'.$name.'.template.php';
    }

    public static function get($name){

        if(!isset($_SESSION)){
            session_start();
        }
        
        if(isset($_SESSION['data'][$name])){
            echo $_SESSION['data'][$name];
            unset($_SESSION['data'][$name]);               
        }
    }

    public static function auth($name){
        if(!isset($_SESSION)){
            session_start();
        }

        if(isset($_SESSION['user'][$name])){
            echo $_SESSION['user'][$name];
        }
    }
}
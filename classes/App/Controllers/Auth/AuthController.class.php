<?php 

namespace App\Controllers\Auth;

use App\Core\Globals;
use App\Controllers\Controller;

class AuthController extends Controller{
    public function login(){
        Globals::view('auth/login');
    }

    public function register(){
        Globals::view('auth/register');
    }

    public function login_post(){
        $query = "SELECT * FROM users";
        $result =  self::query($query);
        print_r($result);
    }
}
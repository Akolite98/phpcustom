<?php 

namespace App\Controllers\Auth;

use App\Core\Globals;
use App\Controllers\Controller;

class AuthController extends Controller{
    public function login(){
        Globals::view('auth/login.php');
    }

    public function register(){
        Globals::view('auth/register.php');
    }
}
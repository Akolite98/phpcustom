<?php 

namespace App\Controllers;

use App\Core\Globals;

class visitorsController extends Controller{

    public function index(){
        Globals::view('visitors/index');
    }

    public function about(){
        Globals::view('visitors/about-us');
    }


    public function contact(){
        Globals::view('visitors/contact-us');
    }

    public function error_500(){
        Globals::view('error/500');
    }

    public function error_404(){
        Globals::view('error/404');
    }
}
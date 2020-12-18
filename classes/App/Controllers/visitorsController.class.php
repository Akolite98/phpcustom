<?php 

namespace App\Controllers;

use App\Core\Globals;

class visitorsController extends Controller{

    public function index(){
        Globals::view('visitors/index.php');
    }

    public function about(){
        Globals::view('visitors/about-us.php');
    }


    public function contact(){
        Globals::view('visitors/contact-us.php');
    }
}
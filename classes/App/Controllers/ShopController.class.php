<?php 

namespace App\Controllers;

use App\Core\Globals;

class ShopController extends Controller{

    public function index(){
        Globals::view('shop/index.php');
    }
}
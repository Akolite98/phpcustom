<?php

use App\Route;
use App\Core\Globals;
use App\Controllers\ShopController;

Route::get('about-us', function(){
    Globals::view('visitors/about-us.php');
});

Route::get('shop', [ShopController::class, 'index']);

Route::get('cart', function(){
    echo "cart page";
});
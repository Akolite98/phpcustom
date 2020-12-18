<?php

use App\Core\Route;
use App\Core\Globals;
use App\Controllers\visitorsController;

Route::get('', [visitorsController::class, 'index']);

Route::get('about-us', [visitorsController::class, 'about']);

Route::get('contact-us', [visitorsController::class, 'contact']);

Route::get('auth/login', function(){
    Globals::view('auth/login.php');
});
<?php

use App\Core\Route;
use App\Core\Globals;
use App\Controllers\visitorsController;
use App\Controllers\Auth\AuthController;
use App\Controllers\Dashboard\DashboardController;

Route::get('', [visitorsController::class, 'index']);
Route::get('about-us', [visitorsController::class, 'about']);
Route::get('contact-us', [visitorsController::class, 'contact']);
Route::get('500', [visitorsController::class, 'error_500']);
Route::get('404', [visitorsController::class, 'error_404']);

Route::get('auth/login', [AuthController::class, 'login']);
Route::get('auth/register', [AuthController::class, 'register']);
Route::post('login', [App\Controllers\Auth\LoginController::class, 'login_controller']);
Route::post('register', [App\Controllers\Auth\RegisterController::class, 'registeratrion_controller']);
Route::post('logout', [App\Controllers\Auth\LoginController::class, 'logout']);
Route::get('dashboard', [DashboardController::class, 'index']);
Route::get('profile', [DashboardController::class, 'profile']);
Route::post('profile_post', [DashboardController::class, 'update_profile']);

Route::get('test', function(){
    if(!isset($_SESSION)){
        session_start();
    }

    print_r($_COOKIE);
    print_r($_SESSION);
});

Route::get('revoke', function(){
    if(!isset($_SESSION)){
        session_start();
    }

    // unset($_SESSION['user']);
    setcookie('user', false, time()-100000000);
    setcookie('user_credentials',false , time()-10000000);
});
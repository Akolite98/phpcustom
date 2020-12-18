<?php

use App\Core\Route;
use App\Core\Globals;
use App\Controllers\visitorsController;
use App\Controllers\Auth\AuthController;

Route::get('', [visitorsController::class, 'index']);

Route::get('about-us', [visitorsController::class, 'about']);

Route::get('contact-us', [visitorsController::class, 'contact']);

Route::get('auth/login', [AuthController::class, 'login']);
Route::get('auth/register', [AuthController::class, 'register']);
<?php

use Illuminate\Support\Facades\Route;
use Modules\User\Controllers\UserController;
use Modules\User\Controllers\LoginController;
use Modules\User\Controllers\AuthController;
use Modules\User\Controllers\RegisterController;
use Modules\User\Controllers\LogOutController;
use Modules\User\Controllers\UserStoreController;

Route::get('/', [UserController::class, 'welcome'])->name('welcome');
//Route::get('/login', [LoginController::class, 'login'])->name('login');
//Route::post('authenticate',[AuthController::class, 'authenticate'])->name('authenticate');
//Route::post('logout',[LogoutController::class, 'logout'])->name('logout');
//Route::get('/register', [RegisterController::class, 'register'])->name('register');
//Route::post('/register', [UserStoreController::class, 'register_store'])->name('register.store');

//Route::middleware(['auth'])->group(function () {
//    Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');
//});

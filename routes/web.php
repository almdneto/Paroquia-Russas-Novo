<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/login/form', [AuthController::class, 'loginForm'])->name('login.form');
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::get('/register/form', [AuthController::class,'registerForm'])->name('register.form');
Route::post('/register', [AuthController::class,'register'])->name('register');

Route::get('/users', [UserController::class,'index'])->name('users.index');

Route::post('/logout', [AuthController::class,'logout'])->name('logout');
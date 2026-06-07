<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


// Rotas de autenticação
Route::get('/', fn () => redirect()->route('login'))->name('home');

Route::get('/login', [AuthController::class, 'loginForm'])->name('login');
Route::get('/login/form', fn () => redirect()->route('login'))->name('login.form');
Route::post('/login', [AuthController::class, 'login'])->name('login.attempt');

Route::get('/register/form', [AuthController::class, 'registerForm'])->name('register.form');
Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');


// Rotas de gestão de usuários
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/users', [UserController::class, 'index'])->name('users.index');

    Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
    Route::post('/users', [UserController::class, 'store'])->name('users.store');

    Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update');

    Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');
});

Route::middleware('auth')->group(function () {
    // Rotas para o calendário
    Route::get('/calendar', [App\Http\Controllers\CalendarController::class, 'index'])->name('calendar.index');

    // Rotas para as igrejas
    Route::get('/churches', [App\Http\Controllers\ChurchController::class, 'index'])->name('churches.index');

    // Rotas para os padres
    Route::get('/priests', [App\Http\Controllers\PriestController::class, 'index'])->name('priests.index');
});
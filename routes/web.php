<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LocationController;
use Illuminate\Support\Facades\Route;


// Rotas de autenticação
Route::get('/', fn() => redirect()->route('login'))->name('home');

Route::get('/login', [AuthController::class, 'loginForm'])->name('login');
Route::get('/login/form', fn() => redirect()->route('login'))->name('login.form');
Route::post('/login', [AuthController::class, 'login'])->name('login.attempt');

Route::get('/register/form', [AuthController::class, 'registerForm'])->name('register.form');
Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');
Route::get('/error', fn() => view('error'))->name('error');


Route::middleware(['auth', 'admin'])->group(function () {
    // Rotas de gestão de usuários
    Route::get('/users', [UserController::class, 'index'])->name('users.index');

    Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
    Route::post('/users', [UserController::class, 'store'])->name('users.store');

    Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update');

    Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');

    // Rotas para o calendário
    Route::get('/calendar', [App\Http\Controllers\CalendarController::class, 'index'])->name('calendar.index');

    Route::get('/calendar/create', [App\Http\Controllers\CalendarController::class, 'create'])->name('calendar.create');
    Route::post('/calendar', [App\Http\Controllers\CalendarController::class, 'store'])->name('calendar.store');

    Route::get('/calendar/{id}/edit', [App\Http\Controllers\CalendarController::class, 'edit'])->name('calendar.edit');
    Route::put('/calendar/{id}', [App\Http\Controllers\CalendarController::class, 'update'])->name('calendar.update');

    Route::delete('/calendar/{id}', [App\Http\Controllers\CalendarController::class, 'destroy'])->name('calendar.destroy');

    // Rotas para as igrejas
    Route::get('/location', [App\Http\Controllers\LocationController::class, 'index'])->name('location.index');

    Route::get('/location/create', [App\Http\Controllers\LocationController::class, 'create'])->name('location.create');
    Route::post('/location', [App\Http\Controllers\LocationController::class, 'store'])->name('location.store');

    Route::get('/location/{id}/edit', [App\Http\Controllers\LocationController::class, 'edit'])->name('location.edit');
    Route::put('/location/{id}', [App\Http\Controllers\LocationController::class, 'update'])->name('location.update');

    Route::delete('/location/{id}', [App\Http\Controllers\LocationController::class, 'destroy'])->name('location.destroy');

    // Rotas para os padres
    Route::get('/priests', [App\Http\Controllers\PriestController::class, 'index'])->name('priests.index');

    Route::get('/priests/create', [App\Http\Controllers\PriestController::class, 'create'])->name('priests.create');
    Route::post('/priests', [App\Http\Controllers\PriestController::class, 'store'])->name('priests.store');

    Route::get('/priests/{priest}/edit', [App\Http\Controllers\PriestController::class, 'edit'])->name('priests.edit');
    Route::put('/priests/{priest}', [App\Http\Controllers\PriestController::class, 'update'])->name('priests.update');

    Route::delete('/priests/{priest}', [App\Http\Controllers\PriestController::class, 'destroy'])->name('priests.destroy');
});

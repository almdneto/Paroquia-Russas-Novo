<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
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
    Route::get('/churches', [App\Http\Controllers\ChurchController::class, 'index'])->name('churches.index');

    Route::get('/churches/create', [App\Http\Controllers\ChurchController::class, 'create'])->name('churches.create');
    Route::post('/churches', [App\Http\Controllers\ChurchController::class, 'store'])->name('churches.store');

    Route::get('/churches/{id}/edit', [App\Http\Controllers\ChurchController::class, 'edit'])->name('churches.edit');
    Route::put('/churches/{id}', [App\Http\Controllers\ChurchController::class, 'update'])->name('churches.update');

    Route::delete('/churches/{id}', [App\Http\Controllers\ChurchController::class, 'destroy'])->name('churches.destroy');

    // Rotas para os padres
    Route::get('/priests', [App\Http\Controllers\PriestController::class, 'index'])->name('priests.index');

    Route::get('/priests/create', [App\Http\Controllers\PriestController::class, 'create'])->name('priests.create');
    Route::post('/priests', [App\Http\Controllers\PriestController::class, 'store'])->name('priests.store');

    Route::get('/priests/{priest}/edit', [App\Http\Controllers\PriestController::class, 'edit'])->name('priests.edit');
    Route::put('/priests/{priest}', [App\Http\Controllers\PriestController::class, 'update'])->name('priests.update');

    Route::delete('/priests/{priest}', [App\Http\Controllers\PriestController::class, 'destroy'])->name('priests.destroy');
});

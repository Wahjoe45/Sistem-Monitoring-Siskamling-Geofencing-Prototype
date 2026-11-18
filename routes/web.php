<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/login', [LoginController::class, 'showLogin'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class,'logout'])->name('logout');

// login
Route::middleware(['auth', 'checkrole:pengurus'])
    ->get('/pengurus', function () {
        return view('pengurus.viewpengurus');
    })->name('pengurus.viewpengurus');


Route::middleware(['auth', 'checkrole:warga'])
    ->get('/warga', function () {
        return view('warga.viewwarga');
    })->name('warga.viewwarga');

//Fitur Register
Route::get('/register', [RegisterController::class, 'show'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

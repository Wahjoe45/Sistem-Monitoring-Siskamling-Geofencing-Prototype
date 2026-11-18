<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/login', [LoginController::class, 'showLogin'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class,'logout'])->name('logout');


Route::middleware(['auth', 'checkrole:pengurus'])->get('/pengurus', function () {
    return view('pengurus.viewpengurus');
});


Route::middleware(['auth', 'checkrole:warga'])->get('/warga', function () {
    return view('warga.viewwarga');
});

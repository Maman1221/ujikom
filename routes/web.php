<?php

use App\Http\Controllers\AlbumController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');
route::get('/login',[SessionController::class,'index'])->middleware('guest')->name('login');
route::post('/sesi/login',[AuthController::class,'_login']);
route::get('/logout',[SessionController::class,'logout'])->middleware('auth');

//Albums
route::get('/album', [AlbumController::class, 'index'])->name('album.index');
route::post('/album', [AlbumController::class, 'store'])->name('album.store');

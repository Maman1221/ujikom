<?php

use App\Http\Controllers\AlbumController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');
route::get('/login',[SessionController::class,'index'])->middleware('guest')->name('login');
route::post('/sesi/login',[AuthController::class,'_login']);
route::get('/logout',[SessionController::class,'logout'])->middleware('auth');

//Photo
route::get('/Photo', [PhotoController::class, 'index'])->name('Photo.index');
route::post('/Photo', [PhotoController::class, 'store'])->name('Photo.store');
Route::delete('/photos/{id}', [PhotoController::class, 'delete'])->name('delete_photo');

//Album

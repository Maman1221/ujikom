<?php

use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');


//Login
route::get('/login',[SessionController::class,'index']);
route::get('sesi',[SessionController::class,'index']);
route::post('/sesi/login',[SessionController::class,'login']);
route::get('/sesi/logout',[SessionController::class,'logout']);

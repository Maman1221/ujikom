<?php

use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');


//Login
route::get('/login',[SessionController::class,'index']);
route::get('sesi',[SessionController::class,'index']);
route::post('/sesi/login',[SessionController::class,'login']);
route::get('/sesi/logout',[SessionController::class,'logout']);

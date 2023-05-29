<?php

use App\Http\Controllers\barangController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\registerController;
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

// Route::get('/', function () {
//     return view('kerangka.master');
// });

// Route::get('/', function () {
//     return view('kerangka.barang');
// });

route::get('/dashboard', [dashboardController::class, 'index']);

Route::get('/barang',[barangController::class,'index']);

Route::get('/', [loginController::class, 'login'])->name('login'); 
Route::get ('/register',[registerController::class,'register'])->name('register');

Route::post ('/regist',[registerController::class,'store'])->name('register.store');

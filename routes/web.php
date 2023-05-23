<?php

use App\Http\Controllers\barangController;
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

Route::get('/', function () {
    return view('kerangka.barang');
});

Route::get('/barang',[barangController::class,'index']);

Route::get('/login', [loginController::class, 'login'])->name('login'); 
Route::get ('/register',[registerController::class,'register'])->name('register');
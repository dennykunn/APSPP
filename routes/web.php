<?php

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
    return view('index');
});
Route::get('/loginAdmin', function () {
    return view('loginAdmin');
});
Route::get('/loginSiswa', function () {
    return view('loginSiswa');
});
Route::get('/register', function () {
    return view('register');
});

// use App\Http\Controllers\Main;

// Route::get('/', [Main::class, 'index']);
// Route::get('/loginAdmin', [Main::class, 'loginAdmin']);

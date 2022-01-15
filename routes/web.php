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

// Route::get('/', function () {
//     return view('index');
// });
// Route::get('/loginAdmin', function () {
//     return view('loginAdmin');
// });
// Route::get('/loginSiswa', function () {
//     return view('loginSiswa');
// });
// Route::get('/register', function () {
//     return view('register');
// });
// Route::get('/dashboard', function () {
//     return view('dashboard');
// });

use App\Http\Controllers\Main;

Route::get('/', [Main::class, 'index']);
Route::get('/loginAdmin', [Main::class, 'loginAdmin']);
Route::get('/home', [Main::class, 'home']);
Route::get('/loginSiswa', [Main::class, 'loginSiswa']);
Route::get('/register', [Main::class, 'register']);
Route::get('/dashboard', [Main::class, 'dashboard']);
Route::get('/dataSiswa', [Main::class, 'dataSiswa']);
Route::get('/dataKelas', [Main::class, 'dataKelas']);
Route::get('/dashboardTes', [Main::class, 'dashboardTes']);
Route::get('/profilTes', [Main::class, 'profilTes']);
Route::get('/laporan', [Main::class, 'laporan']);
Route::get('/dataPetugas', [Main::class, 'dataPetugas']);
Route::get('/dataTransaksi', [Main::class, 'dataTransaksi']);
Route::get('/dataHistory', [Main::class, 'dataHistory']);

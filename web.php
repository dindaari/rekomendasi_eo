<?php


use App\Http\Controllers\PerusahaanController;
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

Route::get('/',[App\Http\Controllers\DashboardController::class, 'index']);

Route::get('/', function () {
    return view('home');
});

Route::get('/dataperusahaan', function () {
    return view('dataperusahaan');
});

Route::get('/admin',function(){
    return view('main');
});

Route::controller(PerusahaanController::class)->group(function() {
    Route::get('perusahaan/', 'index');
    Route::get('perusahaan/add', 'add');
    Route::post('perusahaan/store', 'store');
    Route::get('perusahaan/edit/{id}', 'edit');
    Route::post('perusahaan/update/{id}', 'update');
    Route::get('perusahaan/delete/{id}', 'delete');
});

use App\Http\Controllers\KriteriaController;
Route::controller(KriteriaController::class)->group(function() {
    Route::get('kriteria/', 'index');
    Route::get('kriteria/add', 'add');
    Route::post('kriteria/store', 'store');
    Route::get('kriteria/edit/{id}', 'edit');
    Route::post('kriteria/update/{id}', 'update');
    Route::get('kriteria/delete/{id}', 'delete');
});

use App\Http\Controllers\AlternatifController;
Route::controller(AlternatifController::class)->group(function() {
    Route::get('alternatif/', 'index');
    Route::get('alternatif/add', 'add');
    Route::post('alternatif/store', 'store');
    Route::get('alternatif/edit/{id}', 'edit');
    Route::post('alternatif/update/{id}', 'update');
    Route::get('alternatif/delete/{id}', 'delete');
});


use App\Http\Controllers\HitungController;
Route::get('/hitung', [HitungController::class, 'hitung'])->name('hitung');

Route::get('/details', function () {
    return view('details');
  });

// Route::get('/login', [LoginController::class, 'login'])->name('login');
// Route::post('/loginproses', [LoginController::class, 'loginproses'])->name('loginproses');

// Route::get('/register', [LoginController::class, 'register'])->name('register');
// Route::post('/registeruser', [LoginController::class, 'registeruser'])->name('registeruser');

// Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

// use App\Http\Controllers\HomeController;
// Route::controller(HomeController::class)->group(function() {
//     Route::get('home/', 'index');
//     Route::get('home/add', 'add');
//     Route::post('home/store', 'store');
// });
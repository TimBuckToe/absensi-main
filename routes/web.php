<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Guru;
// use App\Http\Controllers\EmployeeController;
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
    return view('application/homepage');
});

Route::get('/login', function () {
    return view('auth/login');
});

Route::get('/admin', function () {
    return view('application/admin');
});


Route::get('/guru/id', [GuruController::class, 'tampil']);

// Route::controller(GuruController::class)->group(function () {
//     Route::get('/admin', 'index')->name('guru.index');
//     Route::post('/admin', 'store')->name('guru.store');
// });  

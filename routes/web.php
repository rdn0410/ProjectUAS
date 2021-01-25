<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
    return view('auth.login');
});

Route::get('/index', function () {
    return view('adminLayout/index');
});

Auth::routes();

Route::get('/dosen', [HomeController::class, 'dosen'])-> name('dosen');

Route::get('/createdosen', [HomeController::class, 'create']);

Route::post('/createdosen/store', [HomeController::class, 'store']);

Route::get('dosen/edit/{dosen:slug}', [HomeController::class, 'detail']);

Route::patch('dosen/update/{dosen:slug}', [HomeController::class, 'update']);

Route::delete('dosen/delete/{dosen:slug}', [HomeController::class, 'delete']);


// Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

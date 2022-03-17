<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdmissionController;

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

// admission routes

Route::get('/apply', [AdmissionController::class,'index'])->name('apply');
Route::get('/apply-primary', [AdmissionController::class,'applyPrimary'])->name('applyprimary');
Route::get('/apply-secondary', [AdmissionController::class,'applySecondary'])->name('apply-secondary');

//end admission routes

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\WhyController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\SupplierController;


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
    return view('welcome');
});

Auth::routes();

Route::get('home', [HomeController::class, 'index']);

Route::get('contact', [ContactController::class, 'contact']);

Route::get('about', [AboutController::class, 'about']);

Route::get('services', [ServicesController::class, 'services']);

Route::get('why', [WhyController::class, 'why']);

Route::get('pegawai', [PegawaiController::class, 'pegawai']);

Route::get('supplier', [SupplierController::class, 'supplier']);
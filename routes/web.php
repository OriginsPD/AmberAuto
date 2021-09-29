<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\Auth\loginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Vehicle_Details\BrandsController;
use App\Http\Controllers\Vehicle_Details\VehicleModelController;
use App\Http\Controllers\Vehicle_Details\VehicleTypesController;

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

Route::view('/', 'index')->name('index');
Route::resource('Home', HomePageController::class);

Route::resource('login', loginController::class);
Route::resource('register', RegisterController::class);

Route::resource('Admin', AdminController::class);

Route::resource('Brands', BrandsController::class);
Route::resource('Type', VehicleTypesController::class);
Route::resource('Models', VehicleModelController::class);
Route::resource('Client', ClientController::class);

Route::post('logout', [LogoutController::class, 'logout'])->name('logout');

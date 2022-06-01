<?php

use App\Http\Controllers\AgentController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\Sales\SalesController;
use App\Http\Controllers\Sales\SalesDocController;
use App\Http\Controllers\Sales\SalesInvoiceController;
use App\Http\Controllers\Sales\SalesInvoiceDetailController;
use App\Http\Controllers\Sales\SalesTicketController;
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

Route::resource('Agent', AgentController::class);
Route::resource('Customer', CustomerController::class);
Route::resource('Sales', SalesController::class);

Route::group(['as' => 'Sales'], function () {
    Route::resource('Invoice', SalesInvoiceController::class);
    Route::resource('InvoiceDetail', SalesInvoiceDetailController::class);
    Route::resource('Documents', SalesDocController::class);
    Route::resource('Ticket', SalesTicketController::class);
});

Route::post('logout', [LogoutController::class, 'logout'])->name('logout');

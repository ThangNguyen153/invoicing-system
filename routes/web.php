<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FruitCategoryController;
use App\Http\Controllers\FruitController;
use App\Http\Controllers\InvoiceController;

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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::controller(AuthController::class)->group(function() {
    Route::get('/', 'home')->name('home');
    Route::post('/login', 'login')->name('login');
    Route::get('/dashboard', 'dashboard')->name('dashboard');
});

Route::controller(FruitCategoryController::class)->group(function() {
    Route::get('/fruit-category', 'fruitCategory')->name('fruitCategory');
    Route::post('/add-fruit-category', 'addFruitCategory')->name('addFruitCategory');
});

Route::controller(FruitController::class)->group(function() {
    Route::get('/fruit', 'fruit')->name('fruit');
    Route::post('/add-fruit', 'addFruit')->name('addFruit');
});

Route::controller(InvoiceController::class)->group(function() {
    Route::get('/invoice', 'invoice')->name('invoice');
    Route::get('/add-invoice', 'addInvoice')->name('addInvoice');
    Route::post('/add-invoice', 'addInvoice')->name('addInvoice');
    Route::get('/edit-invoice', 'editInvoice')->name('editInvoice');
    Route::post('/edit-invoice', 'editInvoice')->name('editInvoice');
    Route::post('/delete-invoice', 'deleteInvoice')->name('deleteInvoice');
    Route::get('/export-invoice', 'exportInvoice')->name('exportInvoice');
});



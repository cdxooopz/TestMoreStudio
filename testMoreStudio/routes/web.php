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

Route::resource('/api/car', 'CarController');

Route::resource('/api/transaction', 'TransactionController');

Route::resource('/api/staff', 'StaffController');

Route::get('/api/get-transaction-brand', 'TransactionController@getTransactionByBrand');
Route::get('/api/get-transaction-brand-model', 'TransactionController@getTransactionByBrandAndModel');
Route::get('/api/get-transaction-brand-model-staff', 'TransactionController@getTransactionByBrandAndModelAndStaff');
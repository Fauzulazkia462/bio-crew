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
//     return view('welcome');
// });

ROUTE::get('/', 'homeController@index');
ROUTE::get('/export', 'exportController@index');
ROUTE::post('/submit', 'homeController@insert')->name('insert');
ROUTE::get('/export-excel', 'exportController@exportexcel')->name('exportexcel');
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

Route::match(['GET', 'POST'],'/', "ImporterController@upload")->name('xlsx.upload');

Route::match(['GET', 'POST'], '/importer', "ImporterController@importer")->name("xlsx.importer");

Route::get('/watcher', "ImporterController@watcher")->name('watcher');

Route::get('/data', "ImporterController@show")->name("show");

Route::get('/pdf/{id}', "ImporterController@address")->name('pdf');

Route::post('/pdf/{id}', "ImporterController@pdf")->name('pdf');

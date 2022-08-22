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

Route::get('/', function () {
    return view('project(2)');
});
Route::get('/home', function () {
    return view('project(2)');
});
Route::post('upload', 'BookController@upload')->name('upload');
Route::get('index', 'BookController@index')->name('index');
Route::get('/download/{book}', 'BookController@download');
Route::get('/view/{id}', 'BookController@view');

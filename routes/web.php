<?php

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

Route::get('/todos', 'TodosController@index');
Route::get('/new-todo', 'TodosController@create');
Route::post('/store-todo', 'TodosController@store');
Route::get('/show-todos/{id}', 'TodosController@show');
Route::get('/complate-todos/{id}', 'TodosController@complete');
Route::get('/edit-todos/{id}', 'TodosController@edit');
Route::post('/update-todos/{id}', 'TodosController@update');
Route::get('/detete-todos/{id}', 'TodosController@destroy');

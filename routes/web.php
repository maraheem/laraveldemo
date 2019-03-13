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
/*
Route::get('/','ProjectController@index');
Route::post('/projects','ProjectController@store');
Route::get('/projects/create','ProjectController@create');
Route::get('/projects/{project}','ProjectController@show');
Route::get('/projects/{project}/edit','ProjectController@edit');
Route::patch('/projects/{project}','ProjectController@update');
Route::delete('/projects/{project}','ProjectController@destroy');
*/
Route::resource('projects','ProjectsController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

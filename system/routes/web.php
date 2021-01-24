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
Route::get('/', 'PagesController@home');
Route::get('/students', 'PagesController@students');
Route::GET('/add','PagesController@add');
Route::get('/courses', 'PagesController@courses');
Route::GET('/create','PagesController@create');
Route::get('/delete/{id}','PagesController@delete');
Route::get('/edit/{id}','PagesController@edit');
Route::GET('/msg','PagesController@msg');
Route::get('/deletecourse/{id}','PagesController@deletecourse');
Route::get('/editcourse/{id}','PagesController@editcourse');
Route::get('/list', 'PagesController@list');
Route::get('/registered','PagesController@registered');
Route::get('/regedit/{id}','PagesController@regedit');
Route::get('/deletereg/{id}','PagesController@deletereg');
Route::get('/find', 'PagesController@find');
Route::post('/saved','PagesController@save');
Route::post('/update','PagesController@update');
Route::post('/savecourse','PagesController@savecourse');
Route::post('/updatecourse','PagesController@updatecourse');
Route::post('/saves','PagesController@saves');

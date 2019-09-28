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

	Route::get('/subjects', 'SubjectsController@index');
	Route::get('/subjects/add', 'SubjectController@add');
	Route::post('/subjects/store', 'SubjectController@store');
	Route::get('/strands', 'SubjectController@index');
	Route::get('/strands/add', 'SubjectController@add');
	Route::get('/strands/store', 'SubjectsController@store');
	Route::get('/teachers', 'SubjectsController@index');
	Route::get('/teachers/add', 'SubjectsController@add');
	Route::get('/teachers/store', 'SubjectsController@store');
	Route::get('/section', 'SubjectsController@index');
	Route::get('/section/add', 'SubjectsController@add');
	Route::get('/section/store', 'SubjectsController@store');
	Route::get('/subjects_strands', 'SubjectsController@index');
	Route::get('/subjects_strands/add', 'SubjectsController@add');
	Route::get('/subjects_strands/store', 'SubjectsController@store');
});
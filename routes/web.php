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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/category','CategoryController');
Route::resource('/formation','FormationController');
Route::resource('/professor','ProfessorController');
Route::resource('/student','StudentController');
Route::resource('/classroom','ClassroomController');
Route::resource('/session','SessionController');
Route::resource('/payment','PaymentController');
Route::resource('/seance','SeanceController');
Route::resource('/paymentprof','PaymentProfessorController');
Route::resource('/paymentstudent','PaymentStudentController');
Route::resource('/presence','PresenceController');
Route::resource('/profile','ProfileController');

// ...Search Routes
Route::get('/search','CategoryController@search');
//Route::get('/search','FormationController@search');
//Route::get('/search','StudentController@search');
//Route::get('/search','ProfessorController@search');
//Route::get('/search','StudentController@search');
//Route::get('/search','ClassroomController@search');
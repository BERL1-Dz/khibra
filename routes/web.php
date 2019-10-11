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
Route::resource('/message','MessageController');
//Route::post('submit', 'MessageController@store')->name('submit');

// ...Search Routes
Route::get('/search_category','CategoryController@search');
Route::get('/search_student','StudentController@search');
Route::get('/search','ProfessorController@search');
Route::get('/search_calss','ClassroomController@search');
Route::get('/search_session','SessionController@search');
Route::get('/search_formation','FormationController@search');
Route::get('/search_seance','SeanceController@search');
Route::get('/search_presence','PresenceController@search');
//Route::get('/search_ppayment','PaymentProfessorController@search');
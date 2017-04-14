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

Route::get('/home', function () {
    return view('home');
});



Route::resource('demandeCRUD','demandeController');
Route::resource('articleCRUD','articleController');
Route::resource('bonrefoulementCRUD','bonrefoulementController');
Route::resource('certificatCRUD','certificatController');
Route::resource('prelevCRUD','prelevCRUDController');
Route::resource('chargement','chargementController');
Route::resource('analyse','analyseController');
Route::resource('laboratoire','laboratoireController');
Route::resource('getPDF','PDFController');
Route::get('/menu' , 'menuController@index');






Auth::routes();

//Route::get('/home', 'HomeController@index');

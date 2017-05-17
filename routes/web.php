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

Route::group(['middleware' => 'auth'], function () {
    //    Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes



    // gestion bon refoulement
Route::get('/bonrefoulement' , 'bonrefoulementController@index');
Route::resource('bonrefoulement' , 'bonrefoulementController');

// gestion bon analyse
Route::get('/analyse' , 'analyseController@index');
Route::resource('analyse' , 'analyseController');

// gestion article
Route::get('/article' , 'articleController@index');
Route::resource('article' , 'articleController');

// gestion certificat
Route::get('/certificat' , 'certificatController@index');
Route::resource('certificat' , 'certificatController');

// gestion demande
Route::get('/demande' , 'demandeController@index');
Route::resource('demande' , 'demandeController');

// gestion controlleur
Route::get('/controlleur' , 'controlleurController@index');
Route::resource('controlleur' , 'controlleurController');

// gestion exportateur
Route::get('/exportateur' , 'exportateurController@index');
Route::resource('exportateur' , 'exportateurController');

// gestion laboratoire
Route::get('/laboratoire' , 'laboratoireController@index');
Route::resource('laboratoire' , 'laboratoireController');
});





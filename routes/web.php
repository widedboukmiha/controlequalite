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

Route::get('/homestat', function () {
    return view('homestat');
});

Route::get('/homelab', function () {
    return view('homelaboratoire');
});

Route::get('/navbar', function () {
    return view('navbar.nav');
});

Route::get('menuactive', function () {
    return view('menuactive');
});


Route::get ('sendmail' , 'SendMailController@sendMail');
Route::resource('send' , 'SendMailController@index');

//Route::get('homelab','analyseController@index');

Route::get('demandeCRUD','demandeController@index');
Route::get('demandeCRUD/{index}','demandeController@index');
Route::resource('articleCRUD','articleController');
Route::get('articleCRUD/{index}','articleController@index');
Route::resource('bonrefoulementCRUD','bonrefoulementController');
Route::resource('certificatCRUD','certificatController');
Route::get('certificatCRUD/{index}','certificatController@index');

Route::resource('prelevCRUD','prelevCRUDController');
Route::get('prelevCRUD/{index}','prelevCRUDController@index');
Route::get('prelevCRUD/{edit}','prelevCRUDController@edit');
Route::get('prelevCRUD/{update}','prelevCRUDController@update');

Route::group(['middleware' => ['web']], function() {
  Route::resource('prelevCRUD','prelevCRUDController');
  Route::post ( '/editItem', 'prelevCRUDController@editItem' );
  Route::post ( '/addItem', 'BlogController@addItem' );
  Route::post ( '/destroy', 'prelevCRUDController@destroy' );
});

Route::resource('chargement','chargementController');
Route::resource('analyse','analyseController');
//Route::resource('navbar','navController');

Route::resource('laboratoire','laboratoireController');
Route::resource('controlleur','controlleurController');

Route::resource('getPDF','PDFController');
Route::resource('/menu' , 'menuController');

//Route::get('manage-vue', 'VueItemController@manageVue');
//Route::resource('vueitems','VueItemController');


Route::get('manage-vue', 'VueControlleurController@manageVue');
Route::resource('vuecontrolleurs','VueControlleurController');



Auth::routes();

//Route::get('/home', 'HomeController@index');

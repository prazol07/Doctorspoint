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

Route::get('/', function () {
    return view('frontend.master');
});

Route::get('/home', function () {
    return view('frontend.home');
});


Route::get('/categories',
['uses' =>'TypeController@index', 'as' =>'category.index']);

Route::get('/Eye',
['uses' =>'EyeController@index', 'as' =>'eye.index']);

Route::get('/ENT',
['uses' =>'EntController@index', 'as' =>'ent.index']);

Route::get('/General_surgeon',
['uses' =>'GeneralController@index', 'as' =>'general.index']);

Route::get('/Neurology',
['uses' =>'NeurologyController@index', 'as' =>'neurology.index']);

Route::get('/Urology',
['uses' =>'UrologyController@index', 'as' =>'urology.index']);

Route::get('/General_physician',
['uses' =>'GeneralphysicianController@index', 'as' =>'generalphysician.index']);

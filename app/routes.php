<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', array('as' => 'auth.login', 'uses' => 'AuthenticationController@login'));
Route::get('login', array('as' => 'auth.login', 'uses' => 'AuthenticationController@login'));
Route::post('login', array('as' => 'auth.login', 'uses' => 'AuthenticationController@postLogin'));
Route::get('logout', array('as' => 'auth.logout', 'uses' => 'AuthenticationController@logout'));
Route::get('register', array('as' => 'auth.register', 'uses' => 'AuthenticationController@register'));
Route::get('home', array('as' => 'home', 'uses' => 'HomeController@menuUtama'));

/**
 * Rencana strategis route block
 */
Route::group(['prefix' => 'renstra'], function() 
{
	Route::post('json', ['as' => 'renstra.json', 'uses' => 'RenstraController@postJson']);

	Route::get('{renstra_id}/indikator', ['as' => 'renstra.indikator.json', 'uses' => 'IndikatorController@getRenstra']);
	Route::post('{renstra_id}/indikator', ['as' => 'renstra.indikator.store', 'uses' => 'IndikatorController@postRenstra']);
	Route::put('{renstra_id}/indikator/{indikator_id}', ['as' => 'renstra.indikator.update', 'uses' => 'IndikatorController@putRenstra']);
	Route::delete('{renstra_id}/indikator/{indikator_id}', ['as' => 'renstra.indikator.destroy', 'uses' => 'IndikatorController@deleteRenstra']);
});


/**
 * Penetapan kinerja route block
 */
Route::group(['prefix' => 'tapkin'], function() 
{
	Route::post('json', ['as' => 'tapkin.json', 'uses' => 'TapkinController@postJson']);

	Route::get('{tapkin_id}/indikator', ['as' => 'tapkin.indikator.json', 'uses' => 'IndikatorController@getTapkin']);
	Route::post('{tapkin_id}/indikator', ['as' => 'tapkin.indikator.store', 'uses' => 'IndikatorController@postTapkin']);
	Route::put('{tapkin_id}/indikator/{indikator_id}', ['as' => 'tapkin.indikator.update', 'uses' => 'IndikatorController@putTapkin']);
	Route::delete('{tapkin_id}/indikator/{indikator_id}', ['as' => 'tapkin.indikator.destroy', 'uses' => 'IndikatorController@deleteTapkin']);
});

/**
 * Penetapan kinerja route block
 */
Route::group(['prefix' => 'rkt'], function() 
{
	Route::post('json', ['as' => 'rkt.json', 'uses' => 'RktController@postJson']);

	Route::get('{rkt_id}/indikator', ['as' => 'rkt.indikator.json', 'uses' => 'IndikatorController@getRkt']);
	Route::post('{rkt_id}/indikator', ['as' => 'rkt.indikator.store', 'uses' => 'IndikatorController@postRkt']);
	Route::put('{rkt_id}/indikator/{indikator_id}', ['as' => 'rkt.indikator.update', 'uses' => 'IndikatorController@putRkt']);
	Route::delete('{rkt_id}/indikator/{indikator_id}', ['as' => 'rkt.indikator.destroy', 'uses' => 'IndikatorController@deleteRkt']);
});

/**
 * Resource route
 */
Route::resource('users', 'UsersController');
Route::resource('biro', 'BiroController');
Route::resource('renstra', 'RenstraController');
//Route::resource('renstra.indikator', 'RenstraIndikatorController');
Route::resource('tapkin', 'TapkinController');
Route::resource('rkt', 'RktController');
//Route::resource('indikator', 'IndikatorController');
Route::resource('realisasi', 'RealisasiController');
Route::resource('anggaran', 'AnggaranController');
Route::resource('rincian', 'RincianController');
Route::resource('subkegiatan', 'SubkegiatanController');



/*
Route::resource('sasaran', 'SasaransController');

Route::resource('penetapan-kinerja', 'TapkinsController');
Route::resource('capaian', 'CapaiansController');
Route::resource('anggaran', 'AnggaransController');*/

// Route::resource('sasaran.indikator', 'IndikatorsController');
//Route::resource('RKTS', 'RKTsController');
// Route::resource('capaian-tapkins', 'CapaianTapkinsController');
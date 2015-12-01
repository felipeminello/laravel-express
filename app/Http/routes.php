<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', ['as' => 'index', 'uses' => 'PostController@index']);

Route::group(['prefix' => '/admin'], function () {
	Route::group(['prefix' => '/post'], function () {
		Route::get('/', 			['as' => 'admin.post.index',	'uses' => 'PostAdminController@index']);

		Route::get('/create',		['as' => 'admin.post.create',	'uses' => 'PostAdminController@create']);
		Route::post('/store',		['as' => 'admin.post.store',	'uses' => 'PostAdminController@store']);

		Route::get('/edit/{id}',	['as' => 'admin.post.edit',		'uses' => 'PostAdminController@edit']);
		Route::put('/update/{id}',	['as' => 'admin.post.update',	'uses' => 'PostAdminController@update']);
		Route::get('/destroy/{id}',	['as' => 'admin.post.destroy',	'uses' => 'PostAdminController@destroy']);
	});
});

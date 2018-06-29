<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// listar todas las marcas 
		Route::get('marks', 'MarkController@index');
		// listar una marca
		Route::get('mark/{id}', 'MarkController@show');
		// crear una marca
		Route::post('mark', 'MarkController@store');
		// actualizar una marca
		Route::put('mark', 'MarkController@store');
		// Eliminar una marca
		Route::delete('mark/{id}', 'MarkController@destroy');
		
		Route::get('ListOffers', 'SiteController@listOffers');
		// listar una marca

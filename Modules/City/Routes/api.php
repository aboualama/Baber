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
 
Route::group(['prefix' => 'v1.1']  , function(){    	
  
	Route::get('/city' , 'CityController@index'); 
	Route::post('/city' , 'CityController@store');   
	Route::get('/city/{id}' , 'CityController@show');
	Route::put('/city/{id}' , 'CityController@update');
	Route::delete('/city/{id}' , 'CityController@destroy');  
 

}); 
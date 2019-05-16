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
  
	Route::get('/branch' , 'BranchController@index'); 
	Route::post('/branch' , 'BranchController@store');   
	Route::get('/branch/{id}' , 'BranchController@show');
	Route::put('/branch/{id}' , 'BranchController@update');
	Route::delete('/branch/{id}' , 'BranchController@destroy');  
 

}); 
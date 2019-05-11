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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
 
Route::group(['prefix' => 'v1.1' , 'namespace' => 'Api\Auth']  , function(){    	
  
	Route::post('/register' , 'UserController@register');
	Route::post('/login' , 'UserController@login'); 
	 
    // Route::post('reset-password', 'UserController@reset');
    // Route::post('new-password', 'UserController@password');

 

	// Route::group(['middleware' => 'auth:api'] , function(){   

	// 	Route::get('profile' , 'UserController@profile'); 
	// 	Route::put('profile/update' , 'UserController@update'); 

 
	// 	Route::get('test' , 'UserController@test'); 
	// });

}); 

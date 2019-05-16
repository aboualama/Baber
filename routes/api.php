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
 
 
Route::group(['prefix' => 'v1.1' , 'namespace' => 'Api\Auth']  , function(){    	
  
	Route::post('/register' , 'UserController@register');
	Route::post('/login' , 'UserController@login'); 
	 
    Route::post('reset-password', 'UserController@reset');
    Route::post('new-password', 'UserController@password');
 
	Route::get('/login/{provider}', 'SocialloginController@redirectToProvider');
	Route::get('/login/{provider}/callback', 'SocialloginController@handleProviderCallback');


	Route::group(['middleware' => 'auth:api'] , function(){   

    	Route::get('profile' , 'UserController@profile'); 
		Route::put('profile/update' , 'UserController@update');  

	});

 

}); 

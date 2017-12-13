<?php

Use App\RejectedAuthsController;

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

Route::middleware('auth:api')
   ->get('/user', function (Request $request) {
       return "success";
   });

Route::group(['middleware' => 'auth:api'], function() {
    Route::get('authentications/{switch_id}', 'RejectedAuthsController@getSwitches');
    Route::post('authentications/new', 'RejectedAuthsController@storeResponse');
});
Route::get('authentications', 'RejectedAuthsController@index');

Route::post('login', 'Auth\LoginController@login');

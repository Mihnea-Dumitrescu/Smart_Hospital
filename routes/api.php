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



Route::post('api_ral','PillsController@api_go_ral');
Route::post('api_ral_read33nagle08
	','PillsController@api_go_ral_read');

//Route::get('api_ral_read','PillsController@api_go_ral_read');
Route::get('api_ral_read',['middleware' => 'auth:api','uses'=>'PillsController@api_go_ral_read']);

//Route::get('api_ral_auth','PillsController@api_ral_auth');
Route::get('api_ral_auth',['middleware' => 'auth:api','uses'=>'PillsController@api_ral_auth']);

Route::get('api_ral_view_medicine','PillsController@api_ral_view_medicine');

Route::get('api_update_med_rec',['middleware' => 'auth:api','uses'=>'MedicalrecordController@api_update_med_rec']);


Route::post('api_update_med_rec',['middleware' => 'auth:api','uses'=>'MedicalrecordController@api_update_med_rec']);




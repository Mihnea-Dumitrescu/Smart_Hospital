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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




//Route::get('/', ['uses' => 'PrimaryController@index', 'as' => 'route_home']);

// Route::get('/', function () {
//      return view('welcome');
// });



///////
			//home_user1 nu conteaza - conteaza route
Route::get('/home_user1', ['uses' => 'PrimaryController@index', 'as' => 'route_home_user']);
Route::post('/home_user/save', ['uses' => 'PrimaryController@save', 'as' => 'route_save_user']);

//Route::post('/home_user/save', ['uses' => 'PrimaryController@save', 'as' => 'route_save_add']);

Route::post('generatefake', ['uses' => 'PrimaryController@generateFake', 'as' => 'route_generate']);

Route::get('deleteall', ['uses' => 'PrimaryController@deleteAll', 'as' => 'route_deleteall']);

Route::get('/getdata/{id}', ['uses' => 'PrimaryController@getdata', 'as' => 'route_edit_user']);

Route::post('/home_user/updatedata', ['uses' => 'PrimaryController@update', 'as' => 'route_update_user']);

Route::get('/home_user/deletedata/{id}', ['uses' => 'PrimaryController@delete', 'as' => 'route_delete_user']);

Route::get('/home_user/{template}', ['uses' => 'PrimaryController@pages']);
Route::get('/sendMailtoUser/{id}', ['uses' => 'PrimaryController@sendMailtoUser', 'as' => 'sendMailtoUser']);

Route::get('/getapi/{id}', ['uses' => 'SearchController@getapi', 'as' => 'route_api_user']);
Route::post('/updateapipass/{id}', ['uses' => 'SearchController@updateapipass', 'as' => 'route_api_updateapipass']);

//Route::get('/home_user/getdata/{id}', ['uses' => 'PrimaryController@getdata', 'as' => 'route_add_user']);

//Route::resource('my','MyController');
//Auth::routes();

//Route::get('/home_user/home_user', 'Home_userController@index');



Route::get('/pills1', ['uses' => 'PillsController@index', 'as' => 'route_pills']);

Route::post('/pill/save', ['uses' => 'PillsController@save', 'as' => 'route_save_pill']);

Route::post('/pill/generatefakepills', ['uses' => 'PillsController@generateFake', 'as' => 'route_generate_pills']);

Route::get('deleteallpills', ['uses' => 'PillsController@deleteAll', 'as' => 'route_deleteallpills']);

Route::get('/pill/getdata/{id}', ['uses' => 'PillsController@getdata', 'as' => 'route_edit_pill']);

Route::post('updatedatapills', ['uses' => 'PillsController@update', 'as' => 'route_update_pill']);

Route::get('/pill/deletedatapills/{id}', ['uses' => 'PillsController@delete', 'as' => 'route_delete_pill']);

Route::get('/pill/{template}', ['uses' => 'PillsController@pages']);



//Route::get('/pills', 'PillsController@index');


Route::get('/department1', ['uses' => 'DepartmentController@index', 'as' => 'route_department']);
Route::post('/department/save', ['uses' => 'DepartmentController@save', 'as' => 'route_save_department']);

//Route::post('/department/save', ['uses' => 'DepartmentController@save', 'as' => 'route_save_add']);

Route::post('generatefakedepartment', ['uses' => 'DepartmentController@generateFake', 'as' => 'route_generate_department']);

Route::get('deletealldepartment', ['uses' => 'DepartmentController@deleteAll', 'as' => 'route_deletealldepartment']);

Route::get('/department/getdata/{id}', ['uses' => 'DepartmentController@getdata', 'as' => 'route_edit_department']);

Route::post('/department/updatedata', ['uses' => 'DepartmentController@update', 'as' => 'route_update_department']);

Route::get('/department/deletedata/{id}', ['uses' => 'DepartmentController@delete', 'as' => 'route_delete_department']);

Route::get('/department/{template}', ['uses' => 'DepartmentController@pages']);



Route::get('/pacient1', ['uses' => 'PacientController@index', 'as' => 'route_pacient']);
Route::post('/pacient/save', ['uses' => 'PacientController@save', 'as' => 'route_save_pacient']);
Route::post('/pacient/saveandaddrec', ['uses' => 'PacientController@saveandaddrec', 'as' => 'route_save_pacient_addrec']);



//Route::post('/pacient/save', ['uses' => 'PacientController@save', 'as' => 'route_save_add']);

Route::post('generatefakepacient', ['uses' => 'PacientController@generateFake', 'as' => 'route_generate_pacient']);

Route::get('deleteallpacient', ['uses' => 'PacientController@deleteAll', 'as' => 'route_deleteallpacient']);

Route::get('/pacient/getdata/{id}', ['uses' => 'PacientController@getdata', 'as' => 'route_edit_pacient']);
Route::get('/pacient/getdata1/{id}', ['uses' => 'PacientController@getdata1', 'as' => 'route_edit_pacient1']);

Route::post('/pacient/updatedata', ['uses' => 'PacientController@update', 'as' => 'route_update_pacient']);

Route::get('/pacient/deletedata/{id}', ['uses' => 'PacientController@delete', 'as' => 'route_delete_pacient']);

Route::get('/pacient/{template}', ['uses' => 'PacientController@pages']);



Route::get('/medicalrecords1', ['uses' => 'MedicalrecordController@index', 'as' => 'route_medicalrecord']);
Route::post('/medicalrecord/save', ['uses' => 'MedicalrecordController@save', 'as' => 'route_save_medicalrecord']);

//Route::post('/medicalrecord/save', ['uses' => 'MedicalrecordController@save', 'as' => 'route_save_add']);

//Route::post('generatefake', ['uses' => 'MedicalrecordController@generateFake', 'as' => 'route_generate']);

//Route::get('deleteall', ['uses' => 'MedicalrecordController@deleteAll', 'as' => 'route_deleteallmedicalrecord']);

Route::get('/medicalrecord/getdata/{id}', ['uses' => 'MedicalrecordController@getdata', 'as' => 'route_edit_medicalrecord']);
Route::get('/medicalrecord/getdata1/{id}', ['uses' => 'MedicalrecordController@getdata1', 'as' => 'route_edit_medicalrecord1']);

Route::post('/medicalrecord/updatedata', ['uses' => 'MedicalrecordController@update', 'as' => 'route_update_medicalrecord']);

Route::get('/medicalrecord/deletedata/{id}', ['uses' => 'MedicalrecordController@delete', 'as' => 'route_delete_medicalrecord']);

Route::get('/medicalrecord/{template}', ['uses' => 'MedicalrecordController@pages']);

Route::get('/medicalrecord/populate_medicalrecord/{id}', ['uses' => 'MedicalrecordController@populate_medicalrecord', 'as' => 'route_edit_populate_medicalrecord']);




Route::get('/diagnostic1', ['uses' => 'DiagnosticsController@index', 'as' => 'route_diagnostic']);
Route::post('/diagnostic/save', ['uses' => 'DiagnosticsController@save', 'as' => 'route_save_diagnostic']);

//Route::post('/diagnostic/save', ['uses' => 'DiagnosticsController@save', 'as' => 'route_save_add']);

Route::post('generatefakediagnostic', ['uses' => 'DiagnosticsController@generateFake', 'as' => 'route_generate_diagnostic']);

Route::get('deletealldiagnostic', ['uses' => 'DiagnosticsController@deleteAll', 'as' => 'route_deletealldiagnostic']);

Route::get('/diagnostic/getdata/{id}', ['uses' => 'DiagnosticsController@getdata', 'as' => 'route_edit_diagnostic']);

Route::post('/diagnostic/updatedata', ['uses' => 'DiagnosticsController@update', 'as' => 'route_update_diagnostic']);

Route::get('/diagnostic/deletedata/{id}', ['uses' => 'DiagnosticsController@delete', 'as' => 'route_delete_diagnostic']);

Route::get('/diagnostic/{template}', ['uses' => 'DiagnosticsController@pages']);


///////////////////////////////

Route::get('/product1', ['uses' => 'FileController@index', 'as' => 'route_product']);
Route::get('/product/{template}', ['uses' => 'FileController@pages']);

Route::resource('upload-files','FileController');
Route::get('/getdataimage/{id}', ['uses' => 'FileController@getdataimage', 'as' => 'route_get_data_image']);
Route::get('/route_view_data_image/{id}-{no}', ['uses' => 'FileController@view_data_image', 'as' => 'route_view_data_image']);




Route::get('/pillslns1', ['uses' => 'PillslnsController@index', 'as' => 'route_pillslns']);
Route::post('/pillslns/save', ['uses' => 'PillslnsController@save', 'as' => 'route_save_pillslns']);

//Route::get('deleteall', ['uses' => 'PillslnsController@deleteAll', 'as' => 'route_deleteall']);

//Route::post('generatefakepill', ['uses' => 'PillslnsController@generateFake', 'as' => 'route_generate_pills']);
Route::get('/pillslns/getdata/{id}', ['uses' => 'PillslnsController@getdata', 'as' => 'route_edit_pillslns']);

Route::post('/pillslns/updatedata', ['uses' => 'PillslnsController@update', 'as' => 'route_update_pillslns']);

Route::get('/pillslns/deletedata/{id}', ['uses' => 'PillslnsController@delete', 'as' => 'route_delete_pillslns']);

Route::get('/pillslns/{template}', ['uses' => 'PillslnsController@pages']);

Route::get('/route_view_data_pills/{id}', ['uses' => 'PillslnsController@view_data_pills', 'as' => 'route_view_data_pills']);

Route::resource('upload-pills','PillslnsController');
Route::post('/pillslns/save', ['uses' => 'PillslnsController@store', 'as' => 'route_store_pillslns']);

//Route::get("/searchUser",array('as'=>'searchUser','uses'=> 'PillsController@searchUser'));
//Route::get('search/autocomplete', 'PillsController@autocomplete');

Route::get('search',array('as'=>'search','uses'=>'PillsController@search'));
Route::get('autocomplete',array('as'=>'autocomplete','uses'=>'PillsController@autocomplete'));
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
    return view('auths/login');
});

Route::get('/login','AuthController@login')->name('login');
Route::post('/postlogin','AuthController@postlogin');
Route::get('/logout','AuthController@logout');

Route::group(['middleware' => ['auth','checkRole:super admin']],function(){
Route::get('/dashboard','DashboardController@index');
Route::get('/helpdeskreq','MstreportController@index');
Route::post('/helpdeskreq/create','MstreportController@create');
Route::get('/helpdeskreq/{id}/delete','MstreportController@delete');
Route::get('/approval','ApprovController@index');
Route::get('/approval/{id}/edit','ApprovController@edit');
Route::post('/approval/{id}/update','ApprovController@update');
Route::get('/maintenance','MaintenanceController@index');
Route::get('/maintenance/{id}/edit','MaintenanceController@edit');
Route::post('/maintenance/{id}/update','MaintenanceController@update');
Route::get('/assignment','AssignController@index');
Route::get('/assignment/{id}/edit','AssignController@edit');
Route::post('/assignment/{id}/update','AssignController@update');
Route::get('/settuser','EmployeeController@index');
Route::post('/settuser/create','EmployeeController@create');
Route::group(['prefix' => 'invoice'], function() {
    //[.. CODE SEBELUMNYA ..]
    Route::get('/{id}/print', 'InvoiceController@generateInvoice')->name('invoice.print');
});
});

Route::group(['middleware' => ['auth','checkRole:super admin,TI']],function(){
Route::get('/dashboard','DashboardController@index');
Route::get('/helpdeskreq','MstreportController@index');
Route::post('/helpdeskreq/create','MstreportController@create');
Route::get('/helpdeskreq/{id}/delete','MstreportController@delete');
Route::get('/maintenance','MaintenanceController@index');
Route::get('/maintenance/{id}/edit','MaintenanceController@edit');
Route::post('/maintenance/{id}/update','MaintenanceController@update');
});

Route::group(['middleware' => ['auth','checkRole:super admin,TI,karyawan']],function(){
Route::get('/dashboard','DashboardController@index');
Route::get('/helpdeskreq','MstreportController@index');
Route::post('/helpdeskreq/create','MstreportController@create');
Route::get('/helpdeskreq/{id}/delete','MstreportController@delete');
});

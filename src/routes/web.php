<?php

use Illuminate\Support\Facades\Route;

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

Route::group(['middleware'=>'auth','prefix'=>'dashboard'], function(){
    
    Route::get('/links','LinkController@index')->name('links');
    Route::get('/links/new','LinkController@create');
    Route::post('links/new','LinkController@store');
    Route::get('/links/{link}','LinkController@edit');
    Route::post('/links/{link}','LinkController@update');
    Route::delete('/links/{link}','LinkController@destroy');

    Route::get('/settings', 'UserController@edit')->name('settings');
    Route::post('/settings', 'UserController@update');

    Route::get('/style','StyleController@index');
    Route::post('/style','StyleController@backgroundStore');
});

Route::get('{user}', 'UserController@show')->name('show');

Route::post('/visit/{link}','VisitController@store');

Route::get('/dashboard',function(){
    return redirect()->to('/dashboard/links');
});
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


Route::post('/city/{id}','CityController@index')->where('id','[1,9]+');
Route::group(['namespace' => 'Files'],function (){
    Route::any('upload','FileController@index');
});
Route::get('test/index','TestController@index');



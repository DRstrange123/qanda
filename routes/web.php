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

Route::group(['middleware'=>['web']],function(){
    Route::get('car/index',['uses'=>'CarController@index']);
    Route::any('car/create',['uses'=>'CarController@create']);
    Route::any('car/save',['uses'=>'CarController@save']);
    Route::any('car/update/{id}',['uses'=>'CarController@update']);
    Route::any('car/detail/{id}',['uses'=>'CarController@detail']);
    Route::any('car/delete/{id}',['uses'=>'CarController@delete']);
    Route::any('car/summarize',['uses'=>'CarController@summarize']);
    Route::any('car/savesummarize',['uses'=>'CarController@savesummarize']);
    Route::any('car/summarizelist',['uses'=>'CarController@summarizelist']);



    Route::any('manager/index',['uses'=>'ManagerController@index']);
    Route::any('manager/detail/{username}',['uses'=>'ManagerController@detail']);
    Route::any('manager/daylist',['uses'=>'ManagerController@daylist']);
    Route::any('manager/weeklist',['uses'=>'ManagerController@weeklist']);
    Route::any('manager/monthlist',['uses'=>'ManagerController@monthlist']);
    Route::any('manager/managerlogin',['uses'=>'ManagerController@managerlogin']);
    Route::any('manager/validatemanager',['uses'=>'ManagerController@validatemanager']);
});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

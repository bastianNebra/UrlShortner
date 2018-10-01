<?php

use App\Http\Controllers\UrlsController;
use App\Http\Controllers\UserController;

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

Route::get('/','HomeController@home');

Route::get('profil','UserController@profil')->name('profil');

Route::post('profil','UserController@profilUpdate')->name('profil.update');

Route::resource('url','UrlsController');

//Route::get('url/create','UrlsController@create')->name('url.short');
//Route::post('url/create','UrlsController@store')->name('url.store');
//Route::post('r/{id}','UrlsController@show')->name('url.show')->where('id','[0-9]+');



Route::group(['prefix'=>'admin','middleware'=>'MyIp'],function(){

    Route::get('salut',function(){
        return "Salut l'admin";
    });

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

<?php

use App\Http\Controllers\UrlsController;
use App\Http\Controllers\UserController;
use Carbon\Carbon;

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

Carbon::setToStringFormat(function ($date) {
    return $date->formatLocalized($date->year === 1976 ?
        'jS \o\f F g:i:s a' :
        'jS \o\f F, Y g:i:s a'
    );
});

Route::get('/','HomeController@home');

Route::get('profil','UserController@profil')->name('profil');

Route::post('profil','UserController@profilUpdate')->name('profil.update');

Route::resource('url','UrlsController');

Route::get('urls/create','UrlsController@create')->name('url.short');
Route::post('urls/create','UrlsController@store')->name('url.store');
Route::post('r/{id}','UrlsController@show')->name('url.show')->where('id','[0-9]+');
Route::get('r/{id}','UrlsController@show')->name('url.show')->where('id','[0-9]+');



Route::group(['prefix'=>'admin','middleware'=>'MyIp'],function(){

    Route::get('salut',function(){
        return "Salut l'admin";
    });

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Weg für die Liste von Url
Route::get('urls/list','UrlControllerList@index')->name('url.list');
Route::post('url/list','UrlControllerList@list');

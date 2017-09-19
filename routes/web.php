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

use App\Task;

Route::get('faq', array('as' => 'faq', function(){
  return view('faq');
}));

Auth::routes();

Route::group(['middleware' => 'guest'], function(){

  Route::get('/', function(){
    return view ('auth.login');
  });

  Route::get('register', 'GuestController@index')->name('register');
});


Route::group( ['middleware' => 'auth' ], function(){

    Route::get('authentication', 'HomeController@register');

    Route::get('/', 'HomeController@recommendations')->name('welcome');

    Route::get('search', 'HomeController@search')->name('search');

    Route::any('searchresults', 'HomeController@searchresults')->name('searchresults');

    Route::get('/search/{search}', 'HomeController@detailedjob')->name('detailedjob');

    Route::get('applyconfirmation', 'ApplyController@apply')->name('applyconfirmation');
});

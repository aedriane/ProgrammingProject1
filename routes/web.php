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
Route::resource('jobs','JobController');
Route::resource('users','UserController');

Auth::routes();

Route::get('faq', array('as' => 'faq', function(){
  return view('faq.faq');
}));

Route::get('/', 'GuestController@login')->name('login');

Route::get('register', 'GuestController@index')->name('register');


Route::group( ['middleware' => 'auth' ], function(){

    Route::get('authentication', 'HomeController@register');

    Route::get('/', 'HomeController@recommendations')->name('welcome');

    Route::get('search', 'HomeController@search')->name('search');
    Route::any('searchresults', 'HomeController@searchresults')->name('searchresults');
    Route::get('/search/{search}', 'HomeController@detailedjob')->name('detailedjob');

    Route::get('applyconfirmation', 'ApplyController@apply')->name('applyconfirmation');
});

Route::group(['prefix' => 'admin'], function () {

  Route::get('faq', 'AdminController@faq')->name('adminfaq');

  Route::get('/login', 'AdminAuth\LoginController@showLoginForm')->name('admin_login');
  Route::post('/login', 'AdminAuth\LoginController@login');
  Route::post('/logout', 'AdminAuth\LoginController@logout')->name('admin_logout');

  Route::get('/register', 'AdminAuth\RegisterController@showRegistrationForm')->name('admin_register');
  Route::post('/register', 'AdminAuth\RegisterController@register');

  Route::post('/password/email', 'AdminAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'AdminAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'AdminAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'AdminAuth\ResetPasswordController@showResetForm');
});


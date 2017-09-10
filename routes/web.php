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

});













Route::get('/tasks', function () {

    //$tasks = DB::table('tasks')->latest()->get();

    //return $tasks;

    $tasks = Task::all();

    return view('tasks.index', compact('tasks'));


});

Route::get('/tasks/{task}', function ($id) {

    //$tasks = DB::table('tasks')->find($id);

    $tasks = Task::find($id);

    //return $tasks;

    return view('tasks.show', compact('tasks'));


});

Route::get('about', function(){
  return view('about');
});

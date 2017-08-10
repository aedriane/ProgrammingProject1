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

Route::group( ['middleware' => 'auth' ], function(){
  Route::get('/home', 'HomeController@home');
  ROute::get('/', 'HomeController@welcome');
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

Route::get('auth/passwords/reset')->name('reset');

Auth::routes();

Route::get('/home', 'HomeController@home')->name('home');

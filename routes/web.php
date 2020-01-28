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
    return view('home');
})->middleware('auth');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/tasks',  'TaskController@index')->middleware('auth');
Route::get ('/tasks/{task}/', 'TaskController@show');
Route::get ('/tasks/{task}/delete', 'TaskController@destroy');

Route::get ('/tasks/{task}/edit/', 'TaskController@edit');
Route::post ('/tasks/{task}/edit/', 'TaskController@update');

Route::get ('/add/', 'TaskController@create')->middleware('auth');
Route::post ('/add/', 'TaskController@store');

Route::get('profile', function (){
    return view('auth.profile');
})->middleware('auth');

Route::get ('/completed', 'TaskController@showCompleted')->middleware('auth');

Route::get ('/tasks/{task}/complete/', 'ManageTasksController@complete');
Route::get ('/tasks/{task}/revert/', 'ManageTasksController@notComplete');

Route::get ('/overdue', 'TaskController@showOverdue')->middleware('auth');

Route::get ('/search', 'TaskController@search')->middleware('auth');

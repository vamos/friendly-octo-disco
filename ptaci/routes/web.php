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
Route::get('/progress', 'HomeController@progress');
Route::get('/test/quiz','TestController@quiz');
Route::get('/test/drag_n_drop','TestController@drag_n_drop');
Route::get('/test/time_attack','TestController@time_attack');

// Route::put('/users/{user}','TestController@update_perc');
// Route::patch('/users/{user}','TestController@update_perc');

Route::get('/vyuka/orel', 'VyukaController@orel');
Route::get('/vyuka/stehlik', 'VyukaController@stehlik');
Route::get('/vyuka/sojka', 'VyukaController@sojka');
Route::get('/search', 'VyukaController@search');


// Route::get('/test', 'TestController@index')->name('test');
Route::resource('test','TestController');
Route::resource('vyuka','VyukaController');

Route::resource('users','UserController');

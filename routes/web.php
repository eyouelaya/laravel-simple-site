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

// Route::get('/', function () {
//     return view('welcome');
// }); 
Route::get('/','PagesController@index');
Route::get('/about','PagesController@showAbout');
Route::get('/services','PagesController@showServices'); 
Route::get('/posts/{id}/{page}', 'PostController@showPost');
Route::resource('posts', 'PostController');


Auth::routes();

Route::get('/dashboard', 'DashboardController@index');

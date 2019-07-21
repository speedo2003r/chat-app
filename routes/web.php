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
Route::get('/contacts', 'ContactsController@get');
Route::get('/conversation/{id}', 'ContactsController@conversation');
Route::post('/conversation/send', 'ContactsController@send');

<<<<<<< HEAD
Route::get('pagination','AjaxController@index')->name('index');
Route::get('pagination/fetch_data', 'PaginationController@fetch_data');
=======
Route::get('/paginate', 'PaginateController@index');
Route::get('/paginate/messages', 'PaginateController@get');
>>>>>>> fbe5811330afe9e8f50322b13fa9ce7fdc4060c4

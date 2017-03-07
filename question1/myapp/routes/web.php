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
Route::get('/welcome', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/apply', 'ApplyController@create');
Route::get('/applications', 'ApplyController@applicants');
Route::get('/preview{id}', 'ApplyController@preview');
//Route::get('user/{id}', function ($id) {
//    return 'User '.$id;
//});

Route::post('/apply', 'ApplyController@store');


Route::get('/got', [
    'middleware' => ['auth'],
    'uses' => function () {
        echo "You are allowed to view this page!";
    }]);

<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () { return view('welcome');});
Route::get('/about/', function () { return view('about');});
Route::get('/contact/', function () { return view('contact');});


Route::get('/test/show', 'App\Http\Controllers\TestController@show')->name('test');
Route::get('/test/showOne/{id}', 'App\Http\Controllers\TestController@showOne');
Route::get('/test/showField/{id}/{val}', 'App\Http\Controllers\TestController@showField');
Route::get('/page/show', 'App\Http\Controllers\PageController@showOne');
Route::get('/page/all', 'App\Http\Controllers\PageController@showAll');
Route::get('/test/', function () {
    return '!!';
});
Route::get('/dir/test/', function () {
    return '!';
});
Route::get('/user/{id}/{name}/', function($id, $name) {
    return "ИД: $id Имя: $name";
})->where(['id'=>'[0-9]+','name'=>'[a-z]{2,}']);
//Route::get('/user/{id}/', function($id) {
//    return 'gfjgjgfj';
//});
//Request: All();

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

Route::get('/', function () {
    return view('welcome');
})->name('home');
Route::get('/about/', function () {
    return view('about');
})->name('about');
Route::get('/contact/', function () {
    return view('contact');
})->name('contact');
Route::get('/login/', function () {
    return view('login');
})->name('login');
Route::get('/register/', function () {
    return view('register');
})->name('register');
Route::post('/login/', 'App\Http\Controllers\RegisterController@login')->name('login');
Route::post('/register/', 'App\Http\Controllers\RegisterController@register')->name('register');

Route::post('/contact/submit', 'App\Http\Controllers\ContactController@submit')->name('contact-form');
Route::get('/contact/all', 'App\Http\Controllers\ContactController@allData')->name('all-data');
Route::get('/contact/all/{id}', 'App\Http\Controllers\ContactController@oneData')->name('one-data');
Route::get('/contact/all/{id}/update', 'App\Http\Controllers\ContactController@update')->name('contact-update');
Route::post('/contact/all/{id}/update', 'App\Http\Controllers\ContactController@updateSubmit')->name('contact-form-update');
Route::get('/contact/all/{id}/delete', 'App\Http\Controllers\ContactController@deleteSubmit')->name('contact-delete');






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
Route::get('/user/{id}/{name}/', function ($id, $name) {
    return "ИД: $id Имя: $name";
})->where(['id' => '[0-9]+', 'name' => '[a-z]{2,}']);
//Route::get('/user/{id}/', function($id) {
//    return 'gfjgjgfj';
//});
//Request: All();

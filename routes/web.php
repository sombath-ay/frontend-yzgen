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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::match(['get', 'post'], '/botman', 'FrontendController@handle');

Route::get('/', 'FrontendController@homepage')->name('frontend.homepage');
Route::get('/product', 'FrontendController@product')->name('frontend.product');
Route::get('/about-us', 'FrontendController@aboutus')->name('frontend.aboutus');
Route::get('/corrent', 'FrontendController@corrent')->name('frontend.corrent');
Route::get('/corrent-one', 'FrontendController@corrent_one')->name('frontend.corrent-one');
Route::get('/corrent-two', 'FrontendController@corrent_two')->name('frontend.corrent-two');
Route::get('/corrent-three', 'FrontendController@corrent_three')->name('frontend.corrent-three');
Route::get('/corrent-four', 'FrontendController@corrent_four')->name('frontend.corrent-four');
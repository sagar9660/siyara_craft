<?php
use App\Http\Controllers\RegisterController;
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
//     return view('index');
// });

Route::get('/','App\Http\Controllers\RegisterController@index');
Route::get('/about','App\Http\Controllers\RegisterController@about')->middleware('isLoggedIn');
Route::get('/collection','App\Http\Controllers\RegisterController@collection')->middleware('isLoggedIn');
Route::get('/contact','App\Http\Controllers\RegisterController@contact')->middleware('isLoggedIn');
Route::get('/post','App\Http\Controllers\RegisterController@post')->middleware('isLoggedIn');
Route::get('/register','App\Http\Controllers\RegisterController@register')->middleware('alreadyLoggedIn');
Route::post('/register_submit','App\Http\Controllers\RegisterController@store');
Route::get('/login','App\Http\Controllers\RegisterController@login')->middleware('alreadyLoggedIn');
Route::post('/login_submit','App\Http\Controllers\RegisterController@loginstore');
Route::post('/contact_submit','App\Http\Controllers\RegisterController@contactstore');
Route::get('/logout','App\Http\Controllers\RegisterController@logout');
Route::post('/post_submit','App\Http\Controllers\RegisterController@poststore');
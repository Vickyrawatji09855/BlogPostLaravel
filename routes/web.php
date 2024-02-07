<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CreatePostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','App\Http\Controllers\WelcomeController@welcome');
Route::get('/create', 'App\Http\Controllers\CreatePost@create');
// Route::get('/createPost1','App\Http\Controllers\CreatePostController@logic');
Route::Post('/createPost','App\Http\Controllers\CreatePostController@createblog');
Route::get('/viewfullpost/{id}','App\Http\Controllers\ViewPostController@view');
Route::get('/deletefullpost/{id}','App\Http\Controllers\DeletePostController@delete');
Route::get('/editfullpost/{id}','App\Http\Controllers\EditPostController@edit');
Route::Post('/UpdatePost/{id}','App\Http\Controllers\UpdatePostController@update');

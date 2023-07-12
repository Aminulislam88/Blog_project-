<?php

use App\Http\Controllers\DemoController;
use App\Http\Controllers\PostController;
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

//Route::get('/', function () {
//    return view('welcome');
//});
//Route::get('/',[DemoController::class,'page']);
Route::get('/post',[PostController::class,'page']);
Route::get('/postDetails',[PostController::class,'page1']);
Route::get('/post_list',[PostController::class,'post_list']);

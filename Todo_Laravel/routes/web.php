<?php

use Illuminate\Support\Facades\Route;
// use app\Http\Controllers\TodoController;


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


Route::get('todo','App\Http\Controllers\TodoController@index');
Route::get('createCategory','App\Http\Controllers\TodoController@createCategory');
Route::post('addCategory','App\Http\Controllers\TodoController@addCategory');
Route::post('updateCategory','App\Http\Controllers\TodoController@updateCategory');
Route::post('deleteCategory','App\Http\Controllers\TodoController@deleteCategory');
Route::get('createTodo','App\Http\Controllers\TodoController@createTodo');
Route::post('addTodo','App\Http\Controllers\TodoController@addTodo');
Route::post('updateTodo','App\Http\Controllers\TodoController@updateTodo');
Route::post('deleteTodo','App\Http\Controllers\TodoController@deleteTodo');

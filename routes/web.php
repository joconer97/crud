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

use App\Todo;

Route::get('/','TodoController@index');
Route::get('/todo/update/{id}',function($id){
    $todo = Todo::find($id);

    return view('edit',compact('todo'));

});

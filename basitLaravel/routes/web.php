<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\App;

//Route::resource('/', App::class); // [App::class, 'index']
//Route::get('/', function (){
//    return view('index');
//});
Route::get('/', [App::class, 'index']);

Route::get('/aboutus', [App::class, 'aboutus']);

Route::get('/user/{id}', [App::class, 'user']);

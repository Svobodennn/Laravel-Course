<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Test;
use App\Http\Controllers\RequestLibrary;
use App\Http\Controllers\FormValidations;

Route::get('/contact',[RequestLibrary::class,'contact']);
Route::post('/contact',[RequestLibrary::class,'post'])->name('contact.post');





Route::get('/',[Test::class,'index'])->name('homepage'); // to easily use it in the view files using route('name')

Route::get('/age/{age?}',function ($age = 22){
     return 'Hello! I\'m '.$age.' years old.';
})->where('age','[0-9]+'); // to accept only number | ->whereNumber('age')

Route::get('/book/{slug?}', [Test::class,'book'])->where('slug','[A-Za-z]+'); // ? is to accept null | where to accept only text, >whereAlpha('slug')
# ->whereIn('category', ['movie', 'song', 'painting']);
# -where(['a' => '[A-Za-z]+', 'b' => '[0-9]+']);

Route::get('/aboutus',[Test::class,'aboutus'])->name('aboutus');


Route::prefix('/electronics')->group(function (){ // mounting
    Route::get('/', function (){
        return 'electronics page';
    });
    Route::get('/phone', function (){
        return 'phone page';
    });
    Route::get('/laptop', function (){
        return 'laptop page';
    });
    Route::get('/camera', function (){
        return 'camera page';
    });
});

Route::view('/','welcome'); // returning only the view
//Route::view('/profile','pages.welcome',$data:array);


Route::get('/register',[FormValidations::class,'index']);
Route::post('/register',[FormValidations::class,'post'])->name('register.post');

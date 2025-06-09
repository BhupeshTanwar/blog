<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Middleware\AgeCheck;
use App\Http\Middleware\CountryCheck;

Route::get('/', function () {
    return view('welcome');
});

// Route::view('home', 'home')->middleware(AgeCheck::class);
Route::view('home', 'home')->middleware([AgeCheck::class,CountryCheck::class]);
Route::view('about', 'about')->middleware(AgeCheck::class);
//Route::view('about','about')->middleware('check1'); // use group of the middleware on one route

// Route::middleware('check1')->group(function () {
//     Route::view('home', 'home');
//     Route::view('about', 'about');                                                                                                                         
//     Route::view('contact', 'about');
//     Route::view('list', 'about');
//     Route::view('user', 'about');
// });

// Route::post('adduser',[UserController::class,'addUser']);

// Route::view('user-form','user-form');

// Route::get('user/{name}',[UserController::class,'getUser']);
// Route::get('user1',[UserController::class,'user1']);

// Route::get('/home', function () {
//     return view('home');
// });

// Route::get('/home/{name}', function ($name) {
//     // echo $name;
//     return view('home',['name'=>$name]);
// });
// Route::view('/abc','home');
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});


Route::post('adduser',[UserController::class,'addUser']);

Route::view('user-form','user-form');

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
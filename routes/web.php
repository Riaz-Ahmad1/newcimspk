<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', function () {
    return view('home');
});

Route::get('/login',[LoginController::class, 'index']);
Route::get('/register',[LoginController::class, 'showRegister']);
Route::post('/users',[LoginController::class, 'store']);
Route::post('/logout',[LoginController::class, 'logout']);
Route::post('/users/authenticate',[LoginController::class, 'authenticate']);

// dashboard dashboard

Route::get('/admin',[LoginController::class,'admin']);
Route::get('/profile',[UserController::class,'index']);


Route::get('/no-access',function(){
  echo 'You have no access to page';
  die();
});

// front page routes setting
Route::get('services', function () {
    return view('services');
})->name('services');

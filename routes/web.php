<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
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


// returns the home page with all posts
Route::get('/crud', PostController::class .'@index')->name('posts.index');
// returns the form for adding a post
Route::get('/posts/create', PostController::class . '@create')->name('posts.create');
// adds a post to the database
Route::post('/posts', PostController::class .'@store')->name('posts.store');
// returns a page that shows a full post
Route::get('/posts/{post}', PostController::class .'@show')->name('posts.show');
// returns the form for editing a post
Route::get('/posts/{post}/edit', PostController::class .'@edit')->name('posts.edit');
// updates a post
Route::put('/posts/{post}', PostController::class .'@update')->name('posts.update');
// deletes a post
Route::delete('/posts/{post}', PostController::class .'@destroy')->name('posts.destroy');
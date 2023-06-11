<?php

use App\Http\Controllers\LandingController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [LandingController::class, 'getLandingPage']);
Route::get('/about', [LandingController::class, 'getAboutPage']);
Route::get('/posts',[PostsController::class,'getPosts']);
Route::get('/posts/{post}',[PostsController::class,'getPost']);
Route::post('/new-post',[PostsController::class,'postsBlogPost']);

// Route::get('/user/{username}', function($username){
//     return "teste.com.br/" . $username;
// })->where('username','[A-Z]+');


// Route::get('/user/{username}', function($username){
//     // return view('users',['username'=>$username]);
//     return view('users',compact('username'));
// })->where('username','[A-Z]+');

// Route::get('/user/{username}', [\App\Http\Controllers\UsersController::class, 'getProfile'])->where('username','[A-Z]+');
// Route::get('/user/me', [UsersController::class, 'getMeProfile']);
// Route::get('/user/{username}', [UsersController::class, 'getProfile'])->name('user-profile');

// Route::get('/test', [UsersController::class, 'test']);

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\FluentController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\PostController;

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

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/home/{name?}',[HomeController::class,'index'])->name('home.index');
Route::get('/user',[UserController::class,'index'])->name('user.index');
Route::get('/',[ProductController::class,'index'])->name('product.index');
Route::get('/posts',[ClientController::class,'getAllpost'])->name('posts.getallpost');
Route::get('/add-posts',[ClientController::class,'addPost'])->name('posts.addpost');
Route::get('/update-posts',[ClientController::class,'updatePost'])->name('posts.updatepost');
Route::get('/delete-posts/{id}',[ClientController::class,'deletePost'])->name('posts.deletepost');
Route::get('/fluentstring',[FluentController::class,'index'])->name('fluentstring.index');
Route::get('/login',[LoginController::class,'index'])->name('login.index')->middleware('checkuser');
Route::post('/login',[LoginController::class,'loginSubmit'])->name('login.submit');
Route::get('session/get',[SessionController::class,'getSessionData'])->name('get.data');
Route::get('session/add',[SessionController::class,'storeSessionData'])->name('add.data');
Route::get('session/remove',[SessionController::class,'deleteSessionData'])->name('remove.data');
Route::get('/allpost',[PostController::class,'getAllPost'])->name('get.posts');
Route::get('/addpost',[PostController::class,'addPost'])->name('add.posts');
Route::post('/addpost-sub',[PostController::class,'addpostSubmit'])->name('add.postsubmit');
Route::get('/single-post/{id}',[PostController::class,'getPostById'])->name('single.posts');
Route::get('/delete-post/{id}',[PostController::class,'deletePost'])->name('delete.posts');
Route::post('/update-post',[PostController::class,'updatePost'])->name('update.postsubmit');

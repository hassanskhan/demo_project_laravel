<?php

use App\Http\Controllers\CommentsController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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
Route::middleware(['auth:sanctum', 'verified'])->group(function () {

Route::get('/dashboard',[PostController::class,'index'])->name('dashboard');
Route::get('/create-post',function(){
    return view('createposts');
  })->name('create.post');
Route::post('/create-post',[PostController::class,'store'])->name('create.post');
Route::get('/myposts',[UserController::class,'mypost'])->name('user.posts');
Route::get('/editpost/{id}',[PostController::class,'edit'])->name('post.edit');
Route::post('/editpost/{id}',[PostController::class,'update'])->name('post.edit');
Route::get('/delete/{id}',[PostController::class,'destroy'])->name('post.delete');

Route::get('/details/{comments}',[CommentsController::class,'details'])->name('post.details');

Route::post('/detsils/{comments}',[CommentsController::class,'comments'])->name('post.comment');

});



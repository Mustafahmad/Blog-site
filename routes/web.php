<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes([
    'verify' => true
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/about', [App\Http\Controllers\HomeController::class, 'about'])->name('about');
Route::group(['middleware' => ['auth']], function() { 
// Routes For Post
    Route::get('/post',[PostController::class,'index'])->name('post.index');
    Route::get('/post/create',[PostController::class,'create'])->name('post.create');
    Route::post('/post/store',[PostController::class,'store'])->name('post.store');
    Route::delete('/post/{post}',[PostController::class,'destroy'])->name('post.destroy');
    Route::put('/post.update/{post}',[PostController::class,'update'])->name('post.update');
    Route::get('/post.edit/{post}',[PostController::class,'edit'])->name('post.edit');
    Route::get('/post.show/{post}',[PostController::class,'show'])->name('post.show');

// Routes For Comments
    Route::get('/comment',[CommentController::class,'index'])->name('comment.index');
    Route::get('/comment/create',[CommentController::class,'create'])->name('comment.create');
    Route::post('/comment/store',[CommentController::class,'store'])->name('comment.store');
    Route::delete('/comment/{comment}',[CommentController::class,'destroy'])->name('comment.destroy');
    Route::put('/comment.update/{comment}',[CommentController::class,'update'])->name('comment.update');
    Route::get('/comment.edit/{comment}',[CommentController::class,'edit'])->name('comment.edit');
    Route::get('/comment.show/{comment}',[CommentController::class,'show'])->name('comment.show');


    // Routes For Role
    Route::get('/roles',[RoleController::class,'index'])->name('roles.index');
    Route::get('/role/create',[RoleController::class,'create'])->name('roles.create');
    Route::post('/role/store',[RoleController::class,'store'])->name('roles.store');
    Route::delete('/role/{role}',[RoleController::class,'destroy'])->name('roles.destroy');
    Route::put('/role.update/{role}',[RoleController::class,'update'])->name('roles.update');
    Route::get('/role.edit/{role}',[RoleController::class,'edit'])->name('roles.edit');
    Route::get('/role.show/{role}',[RoleController::class,'show'])->name('roles.show');


    // Routes For Users
    Route::get('/users',[UserController::class,'index'])->name('users.index');
    Route::get('/user/create',[UserController::class,'create'])->name('users.create');
    Route::post('/user/store',[UserController::class,'store'])->name('users.store');
    Route::delete('/user/{user}',[UserController::class,'destroy'])->name('users.destroy');
    Route::put('/user.update/{user}',[UserController::class,'update'])->name('users.update');
    Route::get('/user.edit/{user}',[UserController::class,'edit'])->name('users.edit');
    Route::get('/user.show/{user}',[UserController::class,'show'])->name('users.show');
});
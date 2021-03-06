<?php

use App\Http\Controllers\PostsController;
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
    return view('home');
})->name('home');

Route::get('/posts', [PostsController::class, 'index'])->name('posts');

Route::any('/newpost', [PostsController::class, 'newpost'])->name('newpost');

Route::get('/post/{post}', [PostsController::class, 'post'])->name('post');

Route::any('/edit_post/{post}', [PostsController::class, 'edit_post'])->name('post.edit');

Route::get('/delete_post/{post}', [PostsController::class, 'delete_post'])->name('post.delete');

Route::any('/search', [PostsController::class, 'search'])->name('search');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

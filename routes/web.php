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

Route::any('/search', [PostsController::class, 'search'])->name('search');

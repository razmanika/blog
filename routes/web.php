<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AboutUsController;

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

Route::get('/about_us', [AboutUsController::class, 'index']);

Route::get('/posts', [PostController::class, 'posts'])->name('posts');

Route::get('/posts/create', [PostController::class, 'create'])->name('create.post');

Route::get('/posts/{post}', [PostController::class, 'showPost'])->name('show');

Route::post('/posts/save_post', [PostController::class, 'save'])->name('save.post');

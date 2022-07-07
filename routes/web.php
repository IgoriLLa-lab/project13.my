<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PostController::class, 'allPost'])->name('home');

Route::get('/post', [PostController::class, 'post'])->name('post');

Route::get('/post/{id}', [PostController::class, 'viewOne'])->name('one-post');

Route::post('/post/submit', [PostController::class, 'submit'])->name('post-form');

Route::post('/comment/add', [CommentController::class, 'store'])->name('comment-add');

Route::get('/about', [PostController::class, 'about'])->name('about');

Route::get('/car', [PostController::class, 'showPostByCar'])->name('car');

Route::get('/two-hour', [PostController::class, 'showTwoHoursTheme'])->name('two-hour');

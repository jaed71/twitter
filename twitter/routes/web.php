<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TweetController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommentController;

//dashboard

//profile

//users

//feed

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

  
Route::get('/profile', [ProfileController::class, 'index']);

Route::get('/terms', function()
{
    return view('terms');
});

//Route::get('/tweet', [DashboardController::class, 'index'])->name('tweet.index');


Route::post('/tweet', [TweetController::class, 'store'])->name('tweet.create');


Route::get('/tweets/{tweet}', [TweetController::class, 'show'])->name('tweet.show');

Route::get('/tweets/{tweet}/edit', [TweetController::class, 'edit'])->name('tweet.edit');

Route::put('/tweets/{tweet}', [TweetController::class, 'update'])->name('tweet.update');


Route::post('/tweets/{tweet}/comments', [CommentController::class, 'store'])->name('tweet.comments.store');



Route::delete('/tweets/{id}', [TweetController::class, 'destroy'])->name('tweet.destroy');


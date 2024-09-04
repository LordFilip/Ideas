<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IdeaController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\AuthController;


Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

Route::resource('ideas',IdeaController::class)->except(['index','create','show'])->middleware('auth');

Route::resource('ideas',IdeaController::class)->only(['show']);

Route::resource('ideas.comments',CommentController::class)->only(['store'])->middleware('auth');





Route::get('/register', [AuthController::class, 'register'])->name('register');

Route::post('/register', [AuthController::class, 'store']);

Route::get('/login',[AuthController::class,'login'])->name('login');

Route::post('/login',[AuthController::class,'authenticate']);

Route::post('/logout',[AuthController::class,'logout'])->name('logout');












Route::get('/terms', function(){
    return view('terms');
});

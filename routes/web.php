<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IdeaController;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/ideas/{idea}', [IdeaController::class, 'show'])->name('ideas.show');

Route::get('/ideas/{idea}/edit', [IdeaController::class, 'edit'])->name('ideas.edit');

Route::put('/ideas/{idea}', [IdeaController::class, 'update'])->name('ideas.update');


Route::post('/ideas', [IdeaController::class, 'store'])->name('ideas.store');

Route::delete('/ideas/{id}', [IdeaController::class, 'destroy'])->name('ideas.destroy');



Route::get('/terms', function(){
    return view('terms');
});

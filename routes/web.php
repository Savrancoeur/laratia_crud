<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;

// Short Hand
// Route::inertia('/', 'Index');

// Long Hand
Route::get('/', function () {
    return inertia('Index');
});

Route::inertia('/about', 'About');

Route::resource('/articles', ArticleController::class);
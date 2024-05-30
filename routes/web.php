<?php
use App\Http\Controllers\Api\CategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Ensure the correct spelling and namespace
Route::get('/category', [CategoryController::class, 'index'])->name('category');

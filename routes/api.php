<?php

// use App\Http\Controllers\Api\CateogryController;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\CategoryController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('category/list', [CategoryController::class, 'index'])->name('category.list');
Route::post('category/create', [CategoryController::class, 'store'])->name('category.create');
Route::get('category/show/{id}', [CategoryController::class, 'show'])->name('category.show');
Route::put('category/update/{id}', [CategoryController::class, 'update'])->name('category.update');
Route::delete('category/delete/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');

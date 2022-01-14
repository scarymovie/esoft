<?php

use App\Http\Controllers\Post\Admin\AdminPostController;
use App\Http\Controllers\Post\User\PostController;
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
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/posts', [PostController::class, 'index'])->name('post.index');
});
Route::middleware(['auth:sanctum', 'role:admin'])->group(function () {
    Route::get('/posts/create', [AdminPostController::class, 'create'])->name('post.create');
    Route::post('/posts/', [AdminPostController::class, 'store'])->name('post.store');
});


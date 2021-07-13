<?php

use App\Http\Controllers\PostsController;
use App\Http\Controllers\ProfilesController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/posts/create', [PostsController::class, 'create'])->name('posts.create');
Route::post('/posts', [PostsController::class, 'store'])->name('posts.store');
Route::get('/posts/{post}', [PostsController::class, 'show'])->name('posts.show');

Route::get('/profiles/{user}', [ProfilesController::class, 'show'])->name('profiles.show');
Route::get('/profiles/{user}/edit', [ProfilesController::class, 'edit'])->name('profiles.edit');
Route::patch('/profiles/{user}', [ProfilesController::class, 'update'])->name('profiles.update');
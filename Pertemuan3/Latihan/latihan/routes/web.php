<?php
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts', [PostController::class, 'index']) ->name('posts.index');


Route::get('/About', function () {
    return view('About');
});

Route::get('/Home', function () {
    return view('Home');
});

Route::get('/Blog', function () {
    return view('Blog');
});

Route::get('/Contact', function () {
    return view('Contact');
});

Route::resource('posts', PostController::class);
Route::resource('categories', CategoryController::class);


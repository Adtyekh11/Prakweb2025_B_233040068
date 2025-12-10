<?php
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Home');
});

Route::get('/About', function () {
    return view('About');
});

// Route::get('/Home', function () {
//     return view('Home');
// });

Route::get('/Blog', function () {
    return view('Blog');
});

Route::get('/Contact', function () {
    return view('Contact');
});

Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');


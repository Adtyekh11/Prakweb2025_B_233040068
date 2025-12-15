<?php
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts', [PostController::class, 'index']) ->name('posts.index');


Route::get('/about', function () {
    return view('about');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/contact', function () {
    return view('contact');
});




Route::resource('posts', PostController::class);
Route::resource('categories', CategoryController::class);

Route::get('/posts', [PostController::class, 'index'])->middleware('auth')->name('posts.index');
Route::get('/posts/{post:slug}', [PostController::class, 'show'])->middleware('auth')->name('posts.show');


Route::get('/register', [RegisterController::class,'showRegistrationForm'])->middleware('guest')->name('register');
Route::post('/register', [RegisterController::class,'register'])->middleware('guest');

Route::get('/login', [LoginController::class,'showLoginForm'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class,'login'])->middleware('guest');

Route::post('/logout', [LoginController::class,'logout'])->middleware('auth')->name('logout');

Route::get('/dashboard', [DashboardPostController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard.index');
Route::get('/dashboard/posts/create', [DashboardPostController::class, 'create'])->middleware(['auth', 'verified'])->name('dashboard.create');
Route::post('/dashboard/posts', [DashboardPostController::class, 'store'])->middleware(['auth', 'verified'])->name('dashboard.store');
Route::get('/dashboard/posts/{post:slug}', [DashboardPostController::class, 'show'])->middleware(['auth', 'verified'])->name('dashboard.show');

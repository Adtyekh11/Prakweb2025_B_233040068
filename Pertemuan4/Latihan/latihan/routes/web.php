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

Route::get('/posts', [PostController::class, 'index'])->middleware('auth')->name('posts.index');
Route::get('/posts/{post:slug}', [PostController::class, 'show'])->middleware('auth')->name('posts.show');

Route::get('/Register', [RegisterController::class, 'showRegistrationForm'])->middleware('guest')->name('register');
Route::post('/Register', [RegisterController::class, 'Register'])->middleware('guest');

Route::get('/Login', [LoginController::class, 'showLoginForm'])->middleware('guest')->name('Login');
Route::post('/Login', [LoginController::class, 'Login'])->middleware('guest');

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


Route::get('/dashboard', [DashboardPostController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard.index');


Route::get('/dashboard/create', [DashboardPostController::class, 'create'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard.create');


Route::post('/dashboard', [DashboardPostController::class, 'store'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard.store');


Route::get('/dashboard/{post:slug}', [DashboardPostController::class, 'show'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard.show');



<?php

use App\Http\Controllers\AddController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\AuthenticatedSessionController;

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
    return view('index', ['title' => 'Pisanenko.hair']);
});

Route::get('/personal', function () {
    return view('personal_information');
})->name('personal');

Route::get('/home', [HomeController::class, 'home'])->name('home');

Route::get('/blog', [BlogController::class, 'blog'])->name('blog');

Route::get('/blog/category/{id?}', [BlogController::class, 'category'])->name('category');

Route::get('/blog/single/{id?}', [BlogController::class, 'single'])->name('single');

Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

/* Route::get('/register', [RegisteredUserController::class, 'create'])
                ->middleware('guest')
                ->name('register');

Route::post('/register', [RegisteredUserController::class, 'store'])
                ->middleware('guest'); */

Route::get('/login', [AuthenticatedSessionController::class, 'create'])
                ->middleware('guest')
                ->name('login');

Route::post('/login', [AuthenticatedSessionController::class, 'store'])
                ->middleware('guest')
                ->name('login.store');

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
                ->middleware('auth')
                ->name('logout');


Route::post('/check-list', [HomeController::class, 'checkList'])->name('checkList');

/*

Роуты админ-панели

*/

Route::get('/admin', [AdminController::class, 'AllPosts'])->middleware(['auth'])->name('AllPosts');

Route::get('/downloads', [AdminController::class, 'downloadCheck'])->middleware(['auth'])->name('downloadCheck');

Route::match(['get', 'post'],'/add', [AddController::class, 'addPost'] )->middleware(['auth'])->name('addPost');

Route::match(['get', 'post'],'/edit/{id}', [AddController::class, 'editPost'] )->middleware(['auth'])->name('editPost');

Route::match(['get', 'post'],'/del/{id}', [AddController::class, 'delPost'] )->middleware(['auth'])->name('delPost');
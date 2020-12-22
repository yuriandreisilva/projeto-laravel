<?php

Use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\CategoryController;


Auth::routes();

Route::get('/', [HomeController::class, 'welcome'])->name('welcome');

Route::get('/home', [HomeController::class, 'home'])->name('home');

// Route::get('/usuario/novo', [UserController::class, 'show'])->name('newUser');
// Route::post('/usuario/debug', [UserController::class, 'show'])->name('debugUser');
Route::get('/usuario', [UserController::class, 'showAllUsers'])->name('showUsers');
Route::get('/usuario/{user}', [UserController::class, 'showUser']);

Route::get('/endereco', [AddressController::class, 'showAllAddress'])->name('showAddress');
Route::get('/endereco/{address}', [AddressController::class, 'showAddress']);

Route::get('/artigo/novo', [PostController::class, 'showForm'])->name('newPost');
Route::post('/debug', [PostController::class, 'debug'])->name('debug');
Route::get('/artigo', [PostController::class, 'showAllPosts'])->name('showPosts');
Route::get('/artigo/{post}', [PostController::class, 'showPost']);


Route::get('/categoria', [CategoryController::class, 'showAllCategories'])->name('showCategories');
Route::get('/categoria/{category}', [CategoryController::class, 'showCategory']);


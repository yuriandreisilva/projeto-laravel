<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\CategoryController;


Route::get('/', [PostController::class, 'viewForm'])->name('index');

// Route::post('/debug', [PostController::class, 'debug'])->name('debug');

Route::get('/usuario/{user}', [UserController::class, 'show']);

Route::get('/endereco/{address}', [AddressController::class, 'show']);

Route::get('/artigo/{post}', [PostController::class, 'show']);

Route::get('/categoria/{category}', [CategoryController::class, 'show']);


<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\FrontendBookController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;


Route::get('/login', [AuthController::class, 'loginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::get('/register', [AuthController::class, 'regisForm'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.post');
Route::group(['prefix' => 'admin','middleware' => 'auth'], function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');

    Route::get('/book', [BookController::class, 'index'])->name('book.index');
    Route::get('/book/create', [BookController::class, 'create'])->name('book.create');
    Route::post('/book/store', [BookController::class, 'store'])->name('book.store');
    Route::get('/book/edit/{id}', [BookController::class, 'edit'])->name('book.edit');
    Route::post('/book/update/{id}', [BookController::class, 'update'])->name('book.update');
    Route::post('/book/delete/{id}', [BookController::class, 'delete'])->name('book.delete');

    Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
    Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
    Route::post('/category/store', [CategoryController::class, 'store'])->name('category.store');
    Route::get('/category/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
    Route::post('/category/update/{id}', [CategoryController::class, 'update'])->name('category.update');
    Route::post('/category/delete/{id}', [CategoryController::class, 'delete'])->name('category.delete');
});

Route::get('/', [FrontendBookController::class, 'index'])->name('frontend.books.index');
Route::get('/book/{id}', [FrontendBookController::class, 'show'])->name('frontend.books.show');

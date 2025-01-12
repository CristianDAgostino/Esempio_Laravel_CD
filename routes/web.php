<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\PublicController;

Route::get('/', [PublicController::class, 'home'])->name('home');
Route::get('/dashboard', [PublicController::class, 'dashboard'])->name('user.dashboard');


Route::get('/book/create', [BookController::class, 'create'])->name('book.create');
Route::post('/book/store', [BookController::class, 'store'])->name('book.store');
Route::get('/book/index', [BookController::class, 'index'])->name('book.index');
Route::get('/book/show/{book}', [BookController::class, 'show'])->name('book.show');
Route::get('/book/edit/{book}', [BookController::class, 'edit'])->name('book.edit');
Route::put('/book/update/{book}', [BookController::class, 'update'])->name('book.update');
Route::delete('/book/delete/{book}', [BookController::class, 'destroy'])->name('book.delete');

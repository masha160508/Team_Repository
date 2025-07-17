<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\JobChangeController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\LibraryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::resource('books', BookController::class);
Route::resource('category', CategoryController::class);
Route::resource('users', UserController::class);
Route::resource('reviews', ReviewController::class);
Route::resource('languages', LanguageController::class);
Route::resource('libraries', LibraryController::class);
Route::resource('jobChanges', JobChangeController::class);
Route::resource('employees', EmployeeController::class);
Route::resource('authors', AuthorController::class);

Route::get('search', [BookController::class, 'search'])->name('search');

Route::get('search', [CategoryController::class, 'search'])->name('search');



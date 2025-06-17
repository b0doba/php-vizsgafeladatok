<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/todo', [TodoController::class, 'index'])->middleware(['auth', 'verified'])->name('todo.index');

Route::get('/todo/create', [TodoController::class, 'create'])->middleware(['auth', 'verified'])->name('todo.create');
Route::post('/todo', [TodoController::class, 'store'])->middleware(['auth', 'verified'])->name('todo.store');

Route::get('/todo/{todo}', [TodoController::class, 'show'])->middleware(['auth', 'verified'])->name('todo.show');

Route::get('/todo/{todo}/edit', [TodoController::class, 'edit'])->middleware(['auth', 'verified'])->name('todo.edit');
Route::patch('/todo/{todo}', [TodoController::class, 'update'])->middleware(['auth', 'verified'])->name('todo.update');

Route::delete('/todo/{todo}', [TodoController::class, 'destroy'])->middleware(['auth', 'verified'])->name('todo.delete');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

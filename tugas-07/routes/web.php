<?php

use App\Http\Controllers\Poison;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', [Poison::class, 'index'])->name('poison.index');

Route::get('/register', [AuthController::class, 'show_register'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.post');
Route::get('/register/success', function () {
    return view('auth.register_success');
})->name('register.success');

Route::get('/login', [AuthController::class, 'show_login'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/create', [Poison::class, 'create'])->name('poison.create');

    Route::post('/store', [Poison::class, 'store'])->name('poison.store');

    Route::get('/edit/{poison_id}', [Poison::class, 'edit'])->name('poison.edit');

    Route::post('/update/{poison_id}', [Poison::class, 'update'])->name('poison.update');

    Route::get('/delete/{poison_id}', [Poison::class, 'delete'])->name('poison.delete');
});





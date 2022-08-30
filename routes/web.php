<?php

use Illuminate\Support\Facades\{Auth, Route};

Auth::routes();
Route::get('/', fn () => redirect('home'));

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::view('settings/users', 'users.index')->name('users');

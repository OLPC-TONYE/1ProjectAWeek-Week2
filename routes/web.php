<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthManager;


Route::get('/', function () {
    return view('welcome');
})->name(name: 'home');

Route::get('/login', [AuthManager::class, 'login'])->name(name: 'login');
Route::post('/login', [AuthManager::class, 'handle_login_form'])->name(name: 'login.post');

Route::get('/signup', [AuthManager::class, 'signup'])->name(name: 'signup');
Route::post('/signup', [AuthManager::class, 'handle_signup_form'])->name(name: 'signup.post');

Route::get('/logout', [AuthManager::class, 'logout'])->name(name: 'logout');

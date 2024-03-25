<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [WelcomeController::class, 'index'])->name('home');
//Route::get('/posts/{post}', [WelcomeController::class, 'show'])->name('post.show');

Route::middleware('auth')->group(function () {
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'storeLogin'])->name('login-store');
    Route::get('/registration', [AuthController::class, 'showRegisterForm'])->name('registration');
    Route::post('/registration', [AuthController::class, 'storeRegister'])->name('register-store');
    Route::get('/restore_password', [AuthController::class, 'showRestoreForm'])->name('forgot');
    Route::post('/restore_password', [AuthController::class, 'storeRestoreForm'])->name('forgot-store');
});



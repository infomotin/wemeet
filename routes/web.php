<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;



//using middleware as guest to check if user is logged in group route
Route::middleware(['guest'])->group(function () {
    Route::get('/', [AuthController::class, 'showLoginForm'])->name('login');
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login');
    //resgister
    Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
    Route::post('/register', [AuthController::class, 'submitRegisterForm'])->name('register');


});

Route::middleware(['auth'])->group(function () {
    Route::get('/home', [HomeController::class, 'showHomePage'])->name('home');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/profile/{username}', [HomeController::class, 'showProfilePage'])->name('profile');
    Route::get('/search', [HomeController::class, 'Search'])->name('search');
    //account setup     
    Route::get('/account/setup', [HomeController::class, 'showAccountPage'])->name('account');
    Route::post('/account/update', [HomeController::class, 'updateAccount'])->name('updateAccount');
});

<?php

use App\Http\Controllers\HomeController;
use App\Livewire\Forms\FundraiserForm;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'home'])->name('welcome');

Route::get('contact', [HomeController::class, 'contact'])->name('contact');
Route::get('about', [HomeController::class, 'about'])->name('about');
Route::get('fund/{slug}', [HomeController::class, 'fund'])->name('fund');
Route::group(['prefix' => 'auth'], function () {
    Route::get('/login', [HomeController::class, 'login'])->name('login');
    Route::get('/register', [HomeController::class, 'register'])->name('register');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
    Route::get('/profile', [HomeController::class, 'profile'])->name('profile');
    Route::get('/crowd-fund/create', FundraiserForm::class)->name('create_fund');
});
Route::post('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');

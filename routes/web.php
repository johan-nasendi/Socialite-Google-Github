<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SocialiteController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\SendEmailControoler;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    // return view('landing-page');
    return redirect('/masuk');
});

Auth::routes(
    [
        'verify'=>true,
        'register'=> false
    ]
);

// Route::get('email','SendMailController@index');
// Route::post('email/send','SendMailController@send');

// Route::get('/send', [SendEmailControoler::class, 'index']);
// Route::post('/kirim-email', [SendEmailControoler::class, 'posts'])->name('post.email');

// masuk
Route::get('/masuk', [LoginController::class, 'showLoginForm'])->name('masuk');
Route::post('/masuk', [LoginController::class, 'login']);

// daftar
Route::get('/daftar', [RegisterController::class, 'showRegistrationForm'])->name('daftar');
Route::post('/daftar', [RegisterController::class, 'register']);

// Home
Route::get('/beranda', [App\Http\Controllers\HomeController::class, 'index'])->middleware(['auth','verified'])->name('beranda');

// Auth Google Api
Route::get('auth/google', [SocialiteController::class, 'redirectToGoogle'])->name('google.login');
Route::get('auth/google/callback', [SocialiteController::class, 'handleGoogleCallback'])->name('google.callback');

// Auth Github Api
Route::get('auth/github', [SocialiteController::class, 'redirectToGithub'])->name('github.login');
Route::get('auth/github/callback', [SocialiteController::class, 'handleGithubCallback'])->name('github.callback');

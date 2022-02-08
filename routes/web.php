<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/wallet', function () {
    return view('app-wallet');
});

Route::get('/list', function () {
    return view('app-list');
});

Route::get('/notifications', function () {
    return view('app-notifications');
});

Route::get('/profile', function () {
    return view('app-profile');
});

Route::get('/settings', function () {
    return view('app-settings');
});

Route::get('/login1', function () {
    return view('app-login');
});

Route::get('/register2', function () {
    return view('app-register');
});

Route::get('/forgot-password', function () {
    return view('app-forgot-password');
});

Route::get('/404', function () {
    return view('app-404');
});

Route::get('/about', function () {
    return view('app-about');
});

Route::get('/contact', function () {
    return view('app-contact');
});

Route::get('/faq', function () {
    return view('app-faq');
});

Route::get('/change-username', function () {
    return view('app-change-username');
});

Route::get('/change-email', function () {
    return view('app-change-email');
});

Route::get('/change-password', function () {
    return view('app-change-password');
});

Route::get('/transactions', function () {
    return view('app-transactions');
});

Route::get('/qr-code', function () {
    return view('app-qr-code');
});

Route::get('/dc-card', function () {
    return view('app-dc-card');
});

Route::get('/bank-account', function () {
    return view('app-bank-account');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

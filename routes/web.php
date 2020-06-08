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
    return view('pages.users.login');
})->name('users.login');

Route::get('/users/reset-password', function () {
    return view('pages.users.reset-password');
})->name('users.reset-password');

Route::get('/users/reset-alert', function () {
    return view('pages.users.reset-alert');
})->name('users.reset-alert');

Route::get('/users/new-password', function () {
    return view('pages.users.new-password');
})->name('users.new-password');

Route::get('/users/new-password-login', function () {
    return view('pages.users.new-password-login');
})->name('users.new-password-login');

Route::get('/users/old-password', function () {
    return view('pages.users.old-password');
})->name('users.old-password');

Route::get('/users/new-info-alert', function () {
    return view('pages.users.new-info-alert');
})->name('users.new-info-alert');

Route::get('/users/error-login', function () {
    return view('pages.users.error-login');
})->name('users.error-login');

Route::get('/companies/report', function () {
    return view('pages.companies.report');
})->name('companies.report');

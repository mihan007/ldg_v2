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

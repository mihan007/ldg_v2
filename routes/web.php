<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

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

Route::get('/work/orders', function () {
    return view('pages.work.orders');
})->name('work.orders');

Route::get('/work/finance', function () {
    return view('pages.work.finance');
})->name('work.finance');

Route::get('/companies/dashboard', function () {
    return view('pages.companies.dashboard');
})->name('companies.dashboard');

Route::get('/settings/workspace', function () {
    View::share('showSaveButton', true);
    return view('pages.settings.workspace');
})->name('settings.workspace');

Route::get('/settings/workspace-invite', function () {
    return view('pages.settings.workspace-invite');
})->name('settings.workspace-invite');

Route::get('/settings/orders-source', function () {
    return view('pages.settings.orders-source');
})->name('settings.orders-source');

Route::get('/settings/manual', function () {
    return view('pages.settings.elama-instruction');
})->name('settings.elama-instruction');

Route::get('/settings/ad-yandex', function () {
    return view('pages.settings.ad-yandex');
})->name('settings.ad-yandex');

Route::get('/settings/ad-google', function () {
    return view('pages.settings.ad-google');
})->name('settings.ad-google');

Route::get('/settings/ad-roistat', function () {
    return view('pages.settings.ad-roistat');
})->name('settings.ad-roistat');

Route::get('/settings/crm-integration', function () {
    return view('pages.settings.crm-integration');
})->name('settings.crm-integration');

Route::get('/users/users-profile', function () {
    View::share('showSaveButton', true);
    return view('pages.users.users-profile');
})->name('users.users-profile');

Route::get('/users/profile-password', function () {
    View::share('showSaveButton', true);
    return view('pages.users.profile-password');
})->name('users.profile-password');

Route::get('/accounts/users-accounts', function () {
    return view('pages.accounts.users-accounts');
})->name('accounts.users-accounts');

Route::get('/accounts/project', function () {
    return view('pages.accounts.project');
})->name('accounts.project');

Route::get('/accounts/get-payments', function () {
    return view('pages.accounts.get-payments');
})->name('accounts.get-payments');

Route::get('/accounts/timezone', function () {
    return view('pages.accounts.timezone');
})->name('accounts.timezone');

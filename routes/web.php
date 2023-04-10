<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContributorController;
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

Route::get('/', function () {
    return view('app');
})->name('home');

Route::get('/tentang', function () {
    return view('pages.about');
})->name('about');

Route::get('/donasi', function () {
    return view('pages.donation');
})->name('donation');

Route::get('dashboard', [AuthController::class, 'dashboard'])->name('dashboard');
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('custom-login', [AuthController::class, 'customLogin'])->name('login.custom');
Route::get('wkwk', [AuthController::class, 'registration'])->name('register-user');
Route::post('custom-register', [AuthController::class, 'customRegistration'])->name('register.custom');
Route::get('signout', [AuthController::class, 'signOut'])->name('signout');
Route::get('/contributors/exportToPdf', 'App\Http\Controllers\ContributorController@exportToPdf')->name('contributors.exportToPdf');



Route::resource('contributors', ContributorController::class);
Route::get('/contributors', 'App\Http\Controllers\ContributorController@index')->name('contributors.index')->middleware('auth');


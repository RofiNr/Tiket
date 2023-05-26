<?php

use App\Http\Controllers\UserController;
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
    return view('homepage');
});

//HOMEPAGE
Route::get('/homepage', function () {
    return view('homepage');
});

//ABOUT
Route::get('/about', function () {
    return view('about');
});

//CONTACTS
Route::get('/destination', function () {
    return view('destination');
});

//CONTACTS
Route::get('/contacts', function () {
    return view('contacts');
});

Route::get('/', function () {
    return view('homepage', ['title' => 'Homepage']);
})->name('homepage');

Route::get('register', [UserController::class, 'register'])->name('register');
Route::post('register', [UserController::class, 'register_action'])->name('register.action');
Route::get('login', [UserController::class, 'login'])->name('login');
Route::post('login', [UserController::class, 'login_action'])->name('login.action');
Route::get('password', [UserController::class, 'password'])->name('password');
Route::post('password', [UserController::class, 'password_action'])->name('password.action');
Route::get('logout', [UserController::class, 'logout'])->name('logout');

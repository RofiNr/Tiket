<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

//HOMEPAGE
Route::get('/homepage', function () {
    return view('homepage');
});

//ABOUT
Route::get('/about', function () {
    return view('about');
});

Route::get('/sesi' , [SessionController::class, 'index']);
Route::get('/sesi/logout' , [SessionController::class, 'logout']);
Route::post('/sesi/masuk' , [SessionController::class, 'login']);
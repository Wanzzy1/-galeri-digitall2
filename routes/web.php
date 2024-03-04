<?php

use App\Http\Controllers\Auth\LoginRegisterController;
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


// utama
Route::get('/', function () {
    return view('index');
});

// dashboard
Route::get('dashboard', function () {
    return view('dashboard');
});


// login buatan
// Route::get('/ ', [LoginRegisterController::class, 'login'])->name('login');
// Route::post('actionlogin', [LoginRegisterController::class, 'actionlogin'])->name('actionlogin');

// Route::get('home', [HomeControllermiddle::class, 'index'])->name('home')->ware('auth');
// Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');>


// login
Route::controller(LoginRegisterController::class)->group(function () {
    Route::get('/register', 'register')->name('register');
    Route::post('/store', 'store')->name('store');
    Route::get('/login', 'login')->name('login');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    Route::get('/dashboard', 'dashboard')->name('dashboard');
    Route::post('/logout', 'logout')->name('logout');
});
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenController;
use App\Http\Controllers\PagesController;
use Symfony\Component\Finder\Iterator\CustomFilterIterator;

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
    return view('auth.login');
})->name("auth.login");

Route::name('services.')->group(function () {
    Route::get('/service1', function () {
        return view("service1");
    })->name('service1');
    Route::get('/service2', function () {
        return view("service2");
    })->name('service2');
    Route::get('/service3', function () {
        return view("service3");
    })->name('service3');
});

Route::get('/login', [AuthenController::class, 'login'])->name('login');
Route::get('/registration', [AuthenController::class, 'registration']);

Route::controller(AuthenController::class)->group(function () {
    Route::get('/registration', 'registration')->middleware('alreadyLoggedIn');
    Route::post('/registration-user', 'registerUser')->name('register-user');
    Route::get('/login', 'login')->middleware('alreadyLoggedIn');
    Route::post('/login-user', 'loginUser')->name('login-user');
    Route::get('/dashboard', 'dashboard')->middleware('isLoggedIn');
    Route::get('/aboutus', 'aboutus')->middleware('isLoggedIn');
    Route::get('/contactus', 'contactus')->middleware('isLoggedIn');
    Route::get('/service1', 'service1')->middleware('isLoggedIn');
    Route::get('/service2', 'service2')->middleware('isLoggedIn');
    Route::get('/service3', 'service3')->middleware('isLoggedIn');
    Route::get('/logout', 'logout');
});


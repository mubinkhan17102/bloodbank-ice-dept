<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Client\Request;
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
    return view('home');
});

Route::middleware(['auth'])->group(function(){
    Route::view('donor','donor');
    Route::view('update', 'update');
    Route::view('profile', 'profile');
    Route::view('search', 'search');
    Route::get('logout',[AuthController::class, 'logout']);
});

Route::view('/about', 'about');
Route::view('/donate', 'donate');
Route::view('signin', 'signin')->name('signin');
Route::post('signup',[AuthController::class, 'signup']);
Route::post('login', [AuthController::class, 'login']);

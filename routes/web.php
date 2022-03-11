<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DonorController;
use App\Http\Controllers\UserController;
use App\Models\User;
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
    
    
    Route::view('search', 'search');
    Route::get('logout',[AuthController::class, 'logout']);

    //logic for user profile
    Route::get('profile', [UserController::class, 'profile']);
    Route::get('update',[UserController::class, 'update']);
    Route::post('updateuser',[UserController::class, 'updateuser']);
    Route::post('updatepass', [UserController::class, 'updatepass']);
    Route::post('delete', [UserController::class, 'delete']);

    //Route for donors
    Route::get('donor',[DonorController::class, 'default_donor']);
    Route::post('donor', [DonorController::class, 'donor']);
    Route::post('lastdonate', [DonorController::class, 'lastdonate']);
});

Route::view('/about', 'about');
Route::view('/donate', 'donate');
Route::view('signin', 'signin')->name('signin');
Route::post('signup',[AuthController::class, 'signup']);
Route::post('login', [AuthController::class, 'login']);

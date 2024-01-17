<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegistrationController;
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
    return view('welcome');
});
Route::resource('Registration', RegistrationController::class);
Route::post('post-login', [RegistrationController::class, 'postLogin']);
Route::resource('customers', CustomerController::class);
Route::resource('products', ProductController::class);
Route::get('home', function () {
    return view('home');
});
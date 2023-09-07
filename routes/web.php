<?php

use App\Http\Controllers\AdminController;
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
// Main route for the deployment
Route::get('/', function(){
    return view('login');
})->name('auth-login-basic');

Route::get('/forgetPassword', function(){
    return view('forgetPassword');
})->name('auth-reset-password-basic');

Route::get('/register', function(){
    return view('register');
})->name('auth-register-basic');


// Admin controller
Route::get('/admin/', [AdminController::class, 'index'])->name('dashboard');
Route::get('/admin/records/', [AdminController::class, 'details'])->name('records');
Route::get('/admin/form/', [AdminController::class, 'insert'])->name('asset');
Route::get('/admin/report/', [AdminController::class, 'report'])->name('report');
Route::get('/admin/pdf', [AdminController::class, 'createPDF']);
Route::get('/admin/profile/', [AdminController::class, 'profile']);
Route::post('/admin', [AdminController::class, 'store']);
Route::get('/admin/{id}', [AdminController::class, 'show'])->name('dashboard-analytics');

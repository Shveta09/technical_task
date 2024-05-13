<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


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
Route::get('/login',[UserController::class,'login'])->name('login');
Route::get('/login-user', [UserController::class, 'userLogin'])->name('login.user'); 
Route::get('/loanData',[UserController::class,'loanData'])->name('loanData');
Route::get('/processData',[UserController::class,'processData'])->name('processData');


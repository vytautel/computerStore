<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usersSystem\blockUserController;
use App\Http\Controllers\usersSystem\addWorkerController;
use App\Http\Controllers\usersSystem\editUserController;
use App\Http\Controllers\usersSystem\logoutController;
use App\Http\Controllers\usersSystem\loginController;
use App\Http\Controllers\usersSystem\registerController;
use App\Http\Controllers\usersSystem\homeController;

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
Route::get('/blockUser', [blockUserController::class, 'index'])->name('blockUser');
Route::post('/blockUser', [blockUserController::class, 'save_changes']);

Route::get('/addWorker', [addWorkerController::class, 'index'])->name('addWorker');
Route::post('/addWorker', [addWorkerController::class, 'save']);

Route::get('/editUser', [editUserController::class, 'index'])->name('editUser');
Route::post('/editUser', [editUserController::class, 'save_changes']);

Route::post('/logout', [logoutController::class, 'log_out'])->name('logout');

Route::get('/', [homeController::class, 'index'])->name('home');

Route::get('/login', [loginController::class, 'index'])->name('login');
Route::post('/login', [loginController::class, 'log_in']);

Route::get('/register', [registerController::class, 'index'])->name('register');
Route::post('/register', [registerController::class, 'save']);

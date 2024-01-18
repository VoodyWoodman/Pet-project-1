<?php

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



use App\Http\Controllers\FirstBasicController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegController;

Route::get('/home', [ FirstBasicController::class, 'index' ]);
Route::get('/auth', [AuthController::class, 'index'])->name('auth.page');
Route::get('/reg', [RegController::class, 'index'])->name('reg.page');

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\Auth\AuthController;
use App\Http\Controllers\Backend\DashboardController;

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

Route::group(['prefix' => 'admin'], function () {


    // Auth routes
    Route::get('/', [AuthController::class, 'loginForm'])->name('admin.login');
    Route::post('/', [AuthController::class, 'loginProcess'])->name('admin.loginProcess');
    Route::get('logout', [AuthController::class, 'logout'])->name('admin.logout');


    // Dashboard routes
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard.index');


    // users routes
    Route::group(['prefix' => 'users', 'as' => 'users.'], function () {

        Route::get('/', [UserController::class, 'index'])->name('index');
        Route::get('/create', [UserController::class, 'create'])->name('create');
        Route::post('/', [UserController::class, 'store'])->name('store');
        Route::get('/{user}',[UserController::class,'show'])->name('show');
        Route::get('/edit/{user}',[UserController::class,'edit'])->name('edit');
        Route::put('/update/{user}',[UserController::class,'update'])->name('update');
        Route::delete('/{user}',[UserController::class,'destroy'])->name('destroy');

    });
});

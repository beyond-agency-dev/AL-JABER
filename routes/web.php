<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;

//admin
use App\Http\Controllers\admin\DashboardController;

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

Route::get('/', [FrontendController::class, 'index'])->name('home');
Route::get('/category', [FrontendController::class, 'view'])->name('category');
Route::get('/product-info', [FrontendController::class, 'info'])->name('product.info');

//admin
Route::prefix('admin')->group(function () {
    Route::controller(DashboardController::class)->group(function () {
        Route::get('/', 'dashboard')->name('admin.dashboard');
    });
});

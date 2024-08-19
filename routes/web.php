<?php

use App\Http\Controllers\admin\Auth\LoginController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;

//admin
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\ProductController;

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

    Route::middleware(['guest'])->group(function () {
        Route::get('login', [LoginController::class, 'index'])->name('login');
        Route::post('admin-login', [LoginController::class, 'authenticate'])->name('admin.login');
    });

    Route::get('admin-logout', [LoginController::class, 'logout'])->name('admin.logout');

    Route::middleware(['auth:web'])->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('admin.dashboard');
        Route::resource('products', ProductController::class);
        Route::resource('categories', CategoryController::class);
    });
});

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');
Route::group(['middleware' => ['role:admin']], function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::resource('admin/users', UserController::class);
});
Route::group(['middleware' => ['role:developer']], function () {
    Route::get('/developer/dashboard', [DeveloperController::class, 'index'])->name('developer.dashboard');
    Route::get('/developer/settings', [DeveloperController::class, 'settings'])->name('developer.settings');
    Route::post('/developer/deploy', [DeveloperController::class, 'deployCode'])->name('developer.deploy');
    Route::get('/developer/logs', [DeveloperController::class, 'viewLogs'])->name('developer.logs');
    Route::get('/developer/modules', [DeveloperController::class, 'modules'])->name('developer.modules');
    Route::get('/developer/themes', [DeveloperController::class, 'themes'])->name('developer.themes');
    Route::post('/developer/themes/upload', [DeveloperController::class, 'uploadTheme'])->name('developer.uploadTheme');
});


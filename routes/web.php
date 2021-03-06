<?php

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



Auth::routes([
    'reset' => false,
    'update' => false,
    'confirm' => false,
]);

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [App\Http\Controllers\User\MainController::class, 'index'])->name('main');

Route::middleware(['role:admin'])->prefix('admin')->group(function () {

    Route::get('/', [App\Http\Controllers\Admin\MainController::class, 'index'])->name('admin-main');
});

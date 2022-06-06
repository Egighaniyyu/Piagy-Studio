<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;

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

// frontend
Route::get('/', [homeController::class, 'home'])->name('index');
Route::get('/challenge', [homeController::class, 'challenge'])->name('challenge');
Route::get('/mentoring', [homeController::class, 'mentoring'])->name('mentoring');
Route::get('/unlimited-download', [homeController::class, 'unlimited_download'])->name('unlimited_download');
Route::get('/detail', [homeController::class, 'detail_product'])->name('detail');
Route::get('/about', [homeController::class, 'about'])->name('about');
Route::get('/detail-challenge', [homeController::class, 'detail_challenge'])->name('detail_challenge');

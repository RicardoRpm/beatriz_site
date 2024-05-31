<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\RecruitmentController;
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

Route::get('/', [HomeController::class, 'index'])->name('index');

Route::get('/recrutamento', [RecruitmentController::class, 'index'])->name('recrutamento.index');
Route::post('/recrutamento', [RecruitmentController::class, 'store'])->name('recrutamento.store');
Route::get('/admin-beatriz', [AdminController::class, 'index'])->name('admin');
Route::get('/admin-beatriz/services', [AdminController::class, 'services'])->name('admin.services');

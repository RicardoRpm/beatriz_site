<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::post('/contact/store', [HomeController::class, 'store'])->name('contact.store');

Route::get('/admin-beatriz', [AdminController::class, 'index'])->name('admin');
Route::get('/admin-beatriz/services', [AdminController::class, 'services'])->name('admin.service');
Route::post('/admin-beatriz/services', [AdminController::class, 'store'])->name('service.store');
Route::get('/admin-beatriz/projects', [AdminController::class, 'projects'])->name('admin.project');

Route::get('service-details/{detail}', [HomeController::class, 'services'])->name('services-details');
Route::post('/'.  session('locale') . 'admin-beatriz/projects', [AdminController::class, 'storeProjects'])->name('project.store');

Route::get('download-catalog/{serv}', [HomeController::class, 'catalog'])->name('download-catalog');

Route::group(['middleware' => ['setLocale']], function () {
    Route::get('/', [HomeController::class, 'index'])->name('index');
});

Route::get('change-language/{lang}', function($lang){
    if(in_array($lang,['fr','en', 'pt'])){
        session(['locale'=> $lang]);
    }
    return back(); 
})->name('change-language');

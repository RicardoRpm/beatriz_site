<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

//Route::get('/', [HomeController::class, 'index'])->name('index');
Route::post('/contact/store', [HomeController::class, 'store'])->name('contact.store');

Route::get('/admin-beatriz', [AdminController::class, 'index'])->name('admin');
Route::get('/admin-beatriz/services', [AdminController::class, 'services'])->name('admin.service');
Route::post('/admin-beatriz/services', [AdminController::class, 'store'])->name('service.store');
Route::get('/admin-beatriz/projects', [AdminController::class, 'projects'])->name('admin.project');
Route::post('/'.  session('locale') . 'admin-beatriz/projects', [AdminController::class, 'storeProjects'])->name('project.store');

Route::group(['middleware' => ['setLocale']], function () {
    Route::get('/' . session('locale') , [HomeController::class, 'index'])->name('index');
});

Route::get('change-language/{lang}', function($lang){
    if(in_array($lang,['fr','en', 'pt'])){
        session(['locale'=> $lang]);
    }
    return back(); // return to the previous page from where language changed by user
})->name('change-language');

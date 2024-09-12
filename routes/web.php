<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;


Route::post('/contact', [HomeController::class, 'store'])->name('contact.store');

Route::get('/storeSendEmail', [HomeController::class, 'storeSendEmail'])->name('contact.storeSendEmail');

Route::get('/admin-brgroupe', [AdminController::class, 'index'])->name('admin');
Route::get('/admin-brgroupe/services', [AdminController::class, 'services'])->name('admin.service');
Route::post('/admin-brgroupe/services', [AdminController::class, 'store'])->name('service.store');
Route::get('/admin-brgroupe/projects', [AdminController::class, 'projects'])->name('admin.project');

Route::get('service-details/{detail}', [HomeController::class, 'services'])->name('services-details');
Route::post('/'.  session('locale') . 'admin-brgroupe/projects', [AdminController::class, 'storeProjects'])->name('project.store');

Route::get('download-catalog/{serv}', [HomeController::class, 'catalog'])->name('download-catalog');

Route::get('/categoryServices/load-services/{id}', [HomeController::class, 'loadServices'])->name('load-services');

Route::group(['middleware' => ['setLocale']], function () {
    Route::get('/', [HomeController::class, 'index'])->name('index');
});

Route::get('change-language/{lang}', function($lang){
    try {
        if(is_string($lang) && in_array($lang, ['fr', 'eng', 'pt'])){
            session(['locale' => $lang]);
        }
        
        $previousUrl = preg_replace('/\/(fr|eng|pt)(\/|$)/', '/', url()->previous());
        $currentUrl = preg_replace('/\/(fr|eng|pt)(\/|$)/', '/', url()->current());
        
        if ($previousUrl === $currentUrl) {
            return redirect()->route('index'); 
        }
        return back();
    } catch (\Exception $e) {
        Log::error('Error changing language: '.$e->getMessage());
        return redirect()->back()->withErrors(['error' => 'Failed to change language.']);
    }
})->name('change-language');

Route::get('/run-migrations-all', function () {
    return Artisan::call('migrate', ["--force" => true ]);
});
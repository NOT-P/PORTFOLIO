<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Backend\AboutController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\HeroPropertyController;

// Route::get('/', function () {
//     return view('frontend.pages.index');
// });



Route::get('/dashboard', function () {
    return view('backend.pages.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    #logout page 
    Route::get('/logout',[DashboardController::class, 'logout'])->name('logout');

    #HeroProperty page
    Route::get('/home/heroProperty',[HeroPropertyController::class, 'index'])->name('heroProperty.index');
    Route::post('/home/heroProperty',[HeroPropertyController::class, 'store'])->name('heroProperty.store');
    #About page
    Route::get('/home/about',[AboutController::class, 'index'])->name('about.index');
    Route::post('/home/about',[AboutController::class, 'store'])->name('about.store');
});

require __DIR__.'/auth.php';

#frontend pages

Route::get('/',[PageController::class, 'index'])->name('index');
Route::get('/resume',[PageController::class, 'resume'])->name('resume');
Route::get('/projects',[PageController::class, 'projects'])->name('projects');
Route::get('/contact',[PageController::class, 'contact'])->name('contact');

#backend page

// Route::get('/text', function () {
//     return view('backend.layouts.app');
// });

// Route::get('/text', function () {
//     return view('backend.auth.login');
// });
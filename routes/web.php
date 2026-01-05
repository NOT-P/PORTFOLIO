<?php

use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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
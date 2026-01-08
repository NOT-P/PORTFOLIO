<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Backend\AboutController;
use App\Http\Controllers\Backend\ResumeController;
use App\Http\Controllers\Backend\SocialController;
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
    #social page
    Route::get('/home/socials',[SocialController::class, 'index'])->name('socials.index');
    Route::post('/home/socials',[SocialController::class, 'store'])->name('socials.store');


    Route::get('/home/create',[SocialController::class,'create'])->name('social.create');
    Route::get('/home/edit/{id}',[SocialController::class,'edit'])->name('social.edit');
    Route::put('/home/update/{id}',[SocialController::class,'update'])->name('social.update');
    Route::delete('/home/destroy/{id}',[SocialController::class,'destroy'])->name('social.destroy');
    #resume page
    Route::get('/resume/download',[ResumeController::class, 'index'])->name('resumes.index');
    Route::post('/resume/createOrUpdate',[ResumeController::class, 'store'])->name('resumes.store');
    

    //Route::delete('/home/destroy/{social}',[SocialController::class,'destroy'])->name('social.destroy');

    //Route::resource('/home/social',[SocialController::class]);

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

<?php

// via co-pilot gezocht waar dat voorstaat
// route:: get = met get vraag je de url op bijv
// route::get('/about-us',function() { return 'met een beschrijving'; });
// route:: post
// route:: put

use App\Http\Controllers\AboutController; // dit is samen met route about
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('home');
});


Route::get('/about-us', function () {
    return view('about');
});

//Route::get('/about/{name}', [AboutController::class, 'index'])
//    ->name('about');

Route::get('/contact-page', function() {
    return view('contact');
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

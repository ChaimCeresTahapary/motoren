<?php


use App\Http\Controllers\AboutController; // dit is samen met route about
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\Brand;

//Route::get('/', [HomeController::class, 'index'])->name('home');
//Route::get('/about-us', [AboutController::class, 'index'])->name('about');
//Route::get('/contact-page', [ContactController::class, 'index'])->name('contact');


//Route::get('/welcome', function () {
//    return view('welcome');
//
//});



Route::get('/', function () {
    return view('home');
});


Route::get('/brands', function () {
    return view('brands', [
        'brands' => Brand::all()
    ]);
});

//Route::get('/about/{name}', [AboutController::class, 'index'])
//    ->name('about');


Route::get('/brands/{id}', function($id) {
// is een short closure
   $brand = Brand::find($id);

return view('brand',['brand' => $brand]);
});

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

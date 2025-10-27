<?php


use App\Http\Controllers\AboutController; // dit is samen met route about
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

//Route::get('/', [HomeController::class, 'index'])->name('home');
//Route::get('/about-us', [AboutController::class, 'index'])->name('about');
//Route::get('/contact-page', [ContactController::class, 'index'])->name('contact');


Route::get('/welcome', function () {
    return view('welcome');

});

Route::get('/', function () {
    return view('home');
});


Route::get('/brands', function () {
    return view('brands', [
        'jobs' => [
            [
                'id' => 1,
                'title' => 'Honda',
                'category' => 'sport'
            ],
            [
                'id' => 2,
                'title' => 'Yamaha',
                'category' => 'sport'
            ],
            [
                'id' => 3,
                'title' => 'Kawasaki',
                'category' => 'sport'
            ]
        ]
    ]);
});

//Route::get('/about/{name}', [AboutController::class, 'index'])
//    ->name('about');


Route::get('/brands/{id}', function($id) {
    $jobs =  [
        [
            'id' => 1,
            'title' => 'Honda',
            'category' => 'sport'
        ],
        [
            'id' => 2,
            'title' => 'Yamaha',
            'category' => 'sport'
        ],
        [
            'id' => 3,
            'title' => 'Kawasaki',
            'category' => 'sport'
        ]
    ];
// is een short closure
    $job = \Illuminate\Support\Arr::first($jobs, fn($job) => $job['id'] == $id);

return view('job',['job' => $job]);
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

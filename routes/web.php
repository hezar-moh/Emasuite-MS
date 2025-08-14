<?php

<<<<<<< HEAD
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/',[CategoryController::class,'ShowIndex']);


Route::get('/create', function(){
    return view('category.create');
});

Route::post('/store',[CategoryController::class, 'store']);

Route::get('/edit/{id}',[CategoryController::class,'edit'] );

Route::put('/update/{id}',[CategoryController::class, 'update']);

Route::get('/view_data/{id}',[CategoryController::class,'viewData'])->name('view_data');

Route::delete('/destroy/{id}',[CategoryController::class,'destroy']);
=======
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SystemController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;


// Route::get('/', function () {
//     return view('system.add');
// });

// Route::resource('system',SystemController::class);


// Route::get('/dashboards', [DashboardController::class, 'index'])->name('dashboard-index');


Route::get('/', function () {
    return view('index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::resource('system',SystemController::class);
    Route::get('/dashboards', [DashboardController::class, 'index'])->name('dashboard-index');



    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
>>>>>>> 4b39e77928c4d48ceb0d42a855a41879f755d08d

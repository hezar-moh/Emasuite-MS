<?php

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

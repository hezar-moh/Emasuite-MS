<?php

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
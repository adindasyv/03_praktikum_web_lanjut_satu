<?php

use Illuminate\Support\Facades\Route;
use App\Http\COntrollers\HomeController;
use App\Http\COntrollers\ProductController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\AboutusController;
use App\Http\Controllers\ContactusController;



// Route::get('/', function () {
//     return view('app');
// });
// Auth::routes();

Route::get('/home', [HomeController::class, 'index']);

Route::get('/home', [HomeController::class, 'home']);
Route::prefix('products')->group(function(){
    Route::get('/', [ProductController::class, 'index']);
    Route::get('/one', [ProductController::class, 'one']);
    Route::get('/two', [ProductController::class, 'two']);
    Route::get('/three', [ProductController::class, 'three']);
    Route::get('/four', [ProductController::class, 'four']);
});
Route::get('/news/{id}', [NewsController::class, 'index']);

Route::prefix('program')->group(function(){
    Route::get('/one', [ProgramController::class, 'one']);
    Route::get('/two', [ProgramController::class, 'two']);
    Route::get('/three', [ProgramController::class, 'three']);
    Route::get('/four', [ProgramController::class, 'four']);
});

Route::get('/about-us', function(){
    return view('about-us');
});

Route::resource('/contact-us', ContactusController::class)->only(["index"]);



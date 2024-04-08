<?php

use App\Http\Controllers\GridController;
use App\Http\Controllers\MainPageController;
use App\Http\Controllers\MyPlaceController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [MainPageController::class, 'index'])->name('main.index');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts');

Route::get('/guide', function () {
    return view('guide');
})->name('guide');

Route::get('/portfolio', [GridController::class, 'portfolio'])->name('portfolio.index');

Route::get('/services', [GridController::class, 'services'])->name('services.index');

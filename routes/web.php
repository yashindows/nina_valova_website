<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\GridController;
use App\Http\Controllers\GuideController;
use App\Http\Controllers\MainPageController;
use App\Http\Controllers\MyPlaceController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TelegramController;
use Illuminate\Support\Facades\Auth;
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

Route::match(['put', 'patch'], '/edit_title/{asset}', [AdminController::class, 'updateTitle'])->name('main.updateTitle');

Route::match(['put', 'patch'], '/edit_logo/{asset}', [AdminController::class, 'updateLogo'])->name('main.updateLogo');

Route::match(['put', 'patch'], '/edit_mainImg/{asset}', [AdminController::class, 'updateMainImg'])->name('main.updateMainImg');

Route::match(['put', 'patch'], '/edit_contacts/{asset}', [AdminController::class, 'updateContactsInfo'])->name('main.updateContacts');

Route::get('/about', [AboutController::class, 'about'])->name('about');

Route::get('/contacts', [ContactsController::class, 'index'])->name('contacts');

Route::get('/guide', [GuideController::class, 'index'])->name('guide');

Route::get('/portfolio', [GridController::class, 'portfolio'])->name('portfolio.index');

Route::delete('/portfolio/{item}', [AdminController::class, 'destroyPortfolioWork'])->name('portfolio.destroy');

Route::get('/edit_portfolio/{item}', [AdminController::class, 'editFormPortfolio'])->name('edit_portfolio.show');

Route::match(['put', 'patch'], '/portfolio/{item}', [AdminController::class, 'updatePortfolio'])->name('portfolio.update');

Route::match(['put', 'patch'], '/portfolio/{item}/updateImage', [AdminController::class, 'updatePortfolioImage'])->name('portfolio.updateImage');


Route::get('/services', [GridController::class, 'services'])->name('services.index');

Route::post('/create_newService', [AdminController::class, 'createService'])->name('services.create');

Route::post('/create_newPortfolio', [AdminController::class, 'createPortfolioWork'])->name('portfolio.create');

Route::delete('/services/{service}', [AdminController::class, 'destroyService'])->name('services.destroy');

Route::get('/edit_service/{service}', [AdminController::class, 'editFormService'])->name('edit_service.show');

Route::match(['put', 'patch'], '/services/{service}', [AdminController::class, 'updateService'])->name('services.update');

Route::match(['put', 'patch'], '/services/{service}/updateImage', [AdminController::class, 'updateServiceImage'])->name('services.updateImage');

Route::post('/send', [TelegramController::class, 'sendTelegramMessage']);

Auth::routes();

Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::delete('/orders/{order}', [AdminController::class, 'destroyOrder'])->name('orders.destroy');

Route::post('/create_orderTime', [AdminController::class, 'createOrderTime'])->name('orders.create');

Route::delete('/procedures/{procedure}', [AdminController::class, 'destroyProcedure'])->name('procedures.destroy');

Route::get('/create_service', function () {
    return view('createService');
});

Route::get('/create_portfolioWork', function () {
    return view('createPortfolioWork');
});

Route::get('/create_orderTime', function () {
    return view('createOrderTime');
});

Route::post('/uploadPDF', [AdminController::class, 'uploadPDF']);

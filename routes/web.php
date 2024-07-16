<?php

use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Frontend\FrontendController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('frontend.home');
});

Route::get('/shop', function () {
    return view('frontend.shop');
});



Route::get('/shop-Detail', function () {
    return view('frontend.shopDetail');
});



use App\Http\Controllers\LoginController;

Route::get('/login', [\App\Http\Controllers\LoginController::class, 'index'])->name('login');
Route::post('/login', [\App\Http\Controllers\LoginController::class, 'doLogin'])->name('doLogin');




Route::prefix('/')->group(function () {
    Route::get('/', [FrontendController::class, 'index']);
    Route::get('/categories', [FrontendController::class, 'webCategory']);
    Route::get('/contact', [FrontendController::class, 'webContact']);
});

Route::prefix('admin') ->middleware('authCheck')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/logout',[\App\Http\Controllers\LoginController::class, 'logout'])->name('logout');
    Route::get('/dashboard',[\App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');


    Route::prefix('category') ->middleware('authCheck')->group(function () {
        Route::get('/', [CategoryController::class, 'category'])->name('cat.list');
        Route::get('/add', [CategoryController::class, 'create'])->name('cat.add');
        Route::post('/add', [CategoryController::class, 'store'])->name('cat.submit');
        Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('cat.edit');
        Route::post('/edit', [CategoryController::class, 'update'])->name('cat.update');
        Route::get('/delete/{id}', [\App\Http\Controllers\Backend\CategoryController::class, 'delete'])->name('cat.delete');



        Route::resource('news',\App\Http\Controllers\NewsController::class);



    });

});

Route::get('/news', [DashboardController::class, 'news']);
Route::get('/contact', [DashboardController::class, 'contact']);











<?php

use Illuminate\Support\Facades\Route;


Route::get('/login', [\App\Http\Controllers\LoginController::class, 'index'])->name('login');
Route::post('/login', [\App\Http\Controllers\LoginController::class, 'doLogin'])->name('doLogin');

Route::prefix('/')->group(function () {
    Route::get('/', [\App\Http\Controllers\Frontend\FrontendController::class, 'index']);
    Route::get('/categories/{category_id}', [\App\Http\Controllers\Frontend\FrontendController::class, 'webCategory'])->name('wb.cat');
    Route::get('/news/{news_id}', [\App\Http\Controllers\Frontend\FrontendController::class, 'newsDetails'])->name('wb.news');
    Route::get('/contact', [\App\Http\Controllers\Frontend\FrontendController::class, 'webContact']);
    Route::resource('/comment', \App\Http\Controllers\Frontend\CommentController::class);
    Route::resource('/visitor_login', \App\Http\Controllers\VisitorLoginController::class);
    Route::post('/visitor_do_login', [\App\Http\Controllers\VisitorLoginController::class,'visitor_do_login'])->name('visitor_do_login');
    Route::get('/admin_comment', [\App\Http\Controllers\Frontend\CommentController::class, 'commentList'])->name('api.admin_comment');

});

Route::prefix('admin')->middleware('authCheck')->group(function () {
    Route::get('/logout', [\App\Http\Controllers\LoginController::class, 'logout'])->name('logout');
    Route::get('/dashboard', [\App\Http\Controllers\DashboardController::class, 'dashboard'])->name('dashboard');

    Route::get('/category', [\App\Http\Controllers\Backend\CategoryController::class, 'category'])->name('cat.list');
    Route::get('/category/add', [\App\Http\Controllers\Backend\CategoryController::class, 'create'])->name('cat.add');
    Route::post('/category/add', [\App\Http\Controllers\Backend\CategoryController::class, 'store'])->name('cat.submit');
    Route::get('/category/edit/{id}', [\App\Http\Controllers\Backend\CategoryController::class, 'edit'])->name('cat.edit');
    Route::post('/category/edit', [\App\Http\Controllers\Backend\CategoryController::class, 'update'])->name('cat.update');
    Route::get('/delete/{id}', [\App\Http\Controllers\Backend\CategoryController::class, 'delete'])->name('cat.delete');

    Route::resource('news', \App\Http\Controllers\Backend\NewsController::class);
});

Route::get('/news', [\App\Http\Controllers\DashboardController::class, 'news']);
Route::get('/contact', [\App\Http\Controllers\DashboardController::class, 'contact']);






// My Create

use App\Http\Controllers\NewsController;

Route::get('/list', [\App\Http\Controllers\Backend\NewsController::class, 'list'])->name('list');
Route::get('/card', [\App\Http\Controllers\Backend\NewsController::class, 'create'])->name('card');



Route::get('news/delete/{id}', [App\Http\Controllers\Backend\NewsController::class, 'destroy'])->name('news.delete');

Route::get('news/edit/{id}', [App\Http\Controllers\Backend\NewsController::class, 'edit'])->name('news.edit');







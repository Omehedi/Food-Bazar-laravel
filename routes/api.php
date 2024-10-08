<?php
use App\Http\Controllers\Frontend\CommentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});





Route::get('comments_data', [CommentController::class, 'getComments']);
Route::post('comments_data/delete', [CommentController::class, 'commentDelete']);


Route::resource('category_api', \App\Http\Controllers\Backend\CategoryApiController::class);

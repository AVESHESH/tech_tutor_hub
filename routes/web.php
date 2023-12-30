<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostCategoryController;
use App\Http\Controllers\PostController;
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
    return view('index');
})->name('login');

Route::post('login',[AuthController::class,'login']);


Route::group(['middleware'=>'auth'],function(){

    Route::get('admin/dashboard',[DashboardController::class,'index']);

    Route::get('admin/post/post-category',[PostCategoryController::class,'index']);
    Route::post('admin/post/post-category',[PostCategoryController::class,'store']);

    Route::get('admin/post/view',[PostController::class,'index']);

    Route::post('admin/post/create',[PostController::class,'store']);
    Route::get('admin/post/view-posts',[PostController::class,'viewPost']);

    Route::get('admin/post/view-posts/delete/{id}',[PostController::class,'destroy']);
});


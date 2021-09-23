<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\front\HomeController;
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

Route::get('/',[HomeController::class,'index']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::prefix('admin')->name('admin.')->group(function(){
    Route::middleware(['adminAuth'])->group(function(){
        Route::get('/dashboard',function(){
            return view('admin.index');
        })->name('dashboard');

        // Category Route
        Route::get('/add-category',[CategoryController::class,'add_category'])->name('add-category');
        Route::post('/store-category',[CategoryController::class,'store_category'])->name('store-category');
        Route::get('/show-category',[CategoryController::class,'show_category'])->name('show-category');
        Route::get('/category/{id}',[CategoryController::class,'edit_category'])->name('edit-category');
        Route::post('/edit-category/{id}',[CategoryController::class,'update_category'])->name('update-category');
        Route::get('/delete-category/{id}',[CategoryController::class,'delete_category'])->name('delete-category');

        // Posts Route
        Route::get('/add-post',[PostController::class,'add_post'])->name('add-post');
        Route::post('/store-post',[PostController::class,'store_post'])->name('store-post');
        Route::get('/show-post',[PostController::class,'show_post'])->name('show-post');
        Route::get('/update-post/{id}',[PostController::class,'edit_post'])->name('update-post');
        Route::post('/edit-post/{id}',[PostController::class,'update_post'])->name('edit-post');
        Route::get('/delete-post/{id}',[PostController::class,'delete_post'])->name('delete-post');
    });
});
require __DIR__.'/auth.php';




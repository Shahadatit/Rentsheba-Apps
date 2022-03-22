<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\pageController;
use App\Http\Controllers\Backend\categoryController;
use App\Http\Controllers\Backend\postController;
use App\Http\Controllers\Backend\divisionController;
use App\Http\Controllers\Backend\districtController;

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
    return view('welcome');
});


// Backend Route Group
Route::group(['prefix' => 'admin'],function(){
    Route::get('/dashboard' , [pageController::class , 'index'])->name('admin.dashboard');

    // Category Route
    Route::group(['prefix' => '/post'],function(){
        Route::get('/manage' , [postController::class , 'index'])->name('post.index');
        Route::get('/create' , [postController::class , 'create'])->name('post.create');
        Route::post('/store' , [postController::class , 'store'])->name('post.store');
        Route::get('/edit{id}' , [postController::class , 'edit'])->name('post.edit');
        Route::post('/update{id}' , [postController::class , 'update'])->name('post.update');
        Route::post('/destroy{id}' , [postController::class , 'destroy'])->name('post.destroy');
    });

    // Category Route
    Route::group(['prefix' => '/category'],function(){
        Route::get('/manage' , [categoryController::class , 'index'])->name('category.index');
        Route::get('/create' , [categoryController::class , 'create'])->name('category.create');
        Route::post('/store' , [categoryController::class , 'store'])->name('category.store');
        Route::get('/edit{id}' , [categoryController::class , 'edit'])->name('category.edit');
        Route::post('/update{id}' , [categoryController::class , 'update'])->name('category.update');
        Route::post('/destroy{id}' , [categoryController::class , 'destroy'])->name('category.destroy');
    });

    // Category Route
    Route::group(['prefix' => '/division'],function(){
        Route::get('/manage' , [divisionController::class , 'index'])->name('division.index');
        Route::get('/create' , [divisionController::class , 'create'])->name('division.create');
        Route::post('/store' , [divisionController::class , 'store'])->name('division.store');
        Route::get('/edit{id}' , [divisionController::class , 'edit'])->name('division.edit');
        Route::post('/update{id}' , [divisionController::class , 'update'])->name('division.update');
        Route::post('/destroy{id}' , [divisionController::class , 'destroy'])->name('division.destroy');
    });

    // Category Route
    Route::group(['prefix' => '/district'],function(){
        Route::get('/manage' , [districtController::class , 'index'])->name('district.index');
        Route::get('/create' , [districtController::class , 'create'])->name('district.create');
        Route::post('/store' , [districtController::class , 'store'])->name('district.store');
        Route::get('/edit{id}' , [districtController::class , 'edit'])->name('district.edit');
        Route::post('/update{id}' , [districtController::class , 'update'])->name('district.update');
        Route::post('/destroy{id}' , [districtController::class , 'destroy'])->name('district.destroy');
    });
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

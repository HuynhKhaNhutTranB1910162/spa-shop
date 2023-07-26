<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\HomeController;

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

//Auth::routes();
//
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//
//Route::get('/dasboard',function (){ return view('admin.layouts.app');});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth', 'isAdmin'])->group(function (){

    Route::get('/dashboard',[HomeController::class,'index'])->name('dashboard');

    Route::get('/categories',[CategoryController::class, 'index'])->name('categories');
    Route::get('/create-categories',[CategoryController::class, 'create'])->name('categories.create');
    Route::post('/store-categories',[CategoryController::class, 'store'])->name('categories.store');
    Route::get('/edit-categories/{id}',[CategoryController::class, 'edit'])->name('categories.edit');
    Route::put('/update-categories/{id}',[CategoryController::class, 'update'])->name('categories.update');
    Route::get('/delete-categories/{id}',[CategoryController::class, 'destroy'])->name('categories.delete');

    Route::get('/products',[ProductController::class, 'index'])->name('products');
    Route::get('/create-products',[ProductController::class, 'create'])->name('products.create');
    Route::post('/store-products',[ProductController::class, 'store'])->name('products.store');
    Route::get('/edit-products/{id}',[ProductController::class, 'edit'])->name('products.edit');
    Route::put('/update-products/{id}',[ProductController::class, 'update'])->name('products.update');
    Route::get('/delete-products/{id}',[ProductController::class, 'destroy'])->name('products.delete');

});

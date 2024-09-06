<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\category\CategoryController;
use App\Http\Controllers\Admin\categorychild\CategoryChildController;
use App\Http\Controllers\Admin\product\ProductController;
use App\Http\Controllers\HomeController;
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
Route::get('/admin',[AdminController::class,'home'])->name('admin.home');
Route::get('login-admin',[AdminController::class,'login'])->name('login.admin');

Route::prefix('/admin')->group(function(){
    Route::get('/',[HomeController::class,'home'])->name('home');


    // product
    Route::get('/product-home',[ProductController::class,'index'])->name('product.home');
    // add product
    Route::get('/product-add',[ProductController::class,'add'])->name('add.product');
    // update product
    Route::get('/product-update',[ProductController::class,'update'])->name('update.product');


    // menu
    Route::get('/category-home',[CategoryController::class,'index'])->name('category.home');
    // add-category
    Route::get('/category-add',[CategoryController::class,'add'])->name('category.add');
    // update-category
    Route::get('/category-update',[CategoryController::class,'update'])->name('category.update');


    // menu con
    Route::get('/category-child-home',[CategoryChildController::class,'index'])->name('category-child.home');
    // add-category-child
    Route::get('/category-child-add',[CategoryChildController::class,'add'])->name('category-child.add');
    // update-category-child
    Route::get('/category-child-update',[CategoryChildController::class,'update'])->name('category-child-update');
});
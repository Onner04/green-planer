<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\attrProduct\AttrController;
use App\Http\Controllers\Admin\banner\BannerController;
use App\Http\Controllers\Admin\category\CategoryController;
use App\Http\Controllers\Admin\categorychild\CategoryChildController;
use App\Http\Controllers\Admin\order\OrderController;
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

Route::prefix('admin')->group(function(){
    Route::get('/',[AdminController::class,'home'])->name('home');


    // product
    Route::get('/product',[ProductController::class,'index'])->name('product.index');
    // add product
    Route::get('/product-add',[ProductController::class,'add'])->name('add.product');
    Route::post('/product-add',[ProductController::class,'create'])->name('create.product');
    // update product
    Route::get('/product-update',[ProductController::class,'update'])->name('update.product');


    // menu
    Route::get('/category',[CategoryController::class,'index'])->name('category.index');
    // add-category
    Route::get('/category-add',[CategoryController::class,'add'])->name('category.add');
    Route::post('/category-add',[CategoryController::class,'create'])->name('create.category');
    // update-category
    Route::get('/category-update',[CategoryController::class,'update'])->name('category.update');


    // menu con
    Route::get('/category-child-home',[CategoryChildController::class,'index'])->name('category-child.home');
    // add-category-child
    Route::get('/category-child-add',[CategoryChildController::class,'add'])->name('category-child.add');
    Route::post('/category-child-add',[CategoryChildController::class,'create'])->name('category-child.create');
    // update-category-child
    Route::get('/category-child-update',[CategoryChildController::class,'update'])->name('category-child-update');



    // banner
    Route::get('/banner-home',[BannerController::class,'index'])->name('banner.home');
    // update-banner
    Route::get('banner-update',[BannerController::class,'update'])->name('banner.update');


    // attr-product
    Route::get('/attr-home',[AttrController::class,'index'])->name('attr.home');
    // add-attr-product
    Route::get('/attr-add',[AttrController::class,'add'])->name('attr.add');
    // update-attr-product
    Route::get('/attr-update',[AttrController::class,'update'])->name('attr.update');


    // order
    Route::get('/order-home',[OrderController::class,'index'])->name('order.home');
});


Route::prefix('/')->group(function(){
    Route::get('/',[HomeController::class,'home'])->name('home');

    Route::get('product-detail',[HomeController::class,'product'])->name('product.detail');
});
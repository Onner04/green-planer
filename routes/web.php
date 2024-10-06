<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\attrProduct\AttrController;
use App\Http\Controllers\Admin\banner\BannerController;
use App\Http\Controllers\Admin\category\CategoryController;
use App\Http\Controllers\Admin\categorychild\CategoryChildController;
use App\Http\Controllers\Admin\order\OrderController;
use App\Http\Controllers\Admin\product\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController as ControllersOrderController;
use App\Http\Controllers\OrderProductController;
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
Route::get('login-admin', [AdminController::class,'login'])->name('login.admin');
Route::post('login-admin', [AdminController::class,'postLogin'])->name('postLogin.admin'); 
Route::get('logout-admin', [AdminController::class,'logout'])->name('logout.admin');

Route::middleware('checkAdmin')->prefix('admin')->group(function(){
    Route::get('/',[AdminController::class,'home'])->name('admin.home');


    // product
    Route::get('/product',[ProductController::class,'index'])->name('product.index');
    // add-product
    Route::get('/product-add',[ProductController::class,'add'])->name('product.add');
    Route::post('/product-add',[ProductController::class,'create'])->name('create.product');
    // update-product
    Route::get('/product-update/{id}',[ProductController::class,'edit'])->name('edit.product');
    Route::post('product-update/{id}',[ProductController::class,'update'])->name('update.product');
    // delete-product
    Route::get('/product-delete/{id}',[ProductController::class,'delete'])->name('delete.product');


    // menu
    Route::get('/category',[CategoryController::class,'index'])->name('category.index');
    // add-category
    Route::get('/category-add',[CategoryController::class,'add'])->name('category.add');
    Route::post('/category-add',[CategoryController::class,'create'])->name('create.category');
    // update-category
    Route::get('/category-update/{id}',[CategoryController::class,'edit'])->name('category.edit');
    Route::post('/category-update/{id}',[CategoryController::class,'update'])->name('category.update');
    // delete-category
    Route::get('/category-delete/{id}',[CategoryController::class,'delete'])->name('category.delete');


    // menu con
    Route::get('/category-child-home',[CategoryChildController::class,'index'])->name('category-child.home');
    // add-category-child
    Route::get('/category-child-add',[CategoryChildController::class,'add'])->name('category-child.add');
    Route::post('/category-child-add',[CategoryChildController::class,'create'])->name('category-child.create');
    // update-category-child
    Route::get('/category-child-update/{id}',[CategoryChildController::class,'edit'])->name('category-child.edit');
    Route::post('/category-child-update/{id}',[CategoryChildController::class,'update'])->name('category-child.update');
    // delete-category-child
    Route::get('/category-child-delete/{id}',[CategoryChildController::class,'delete'])->name('category-child.delete');



    // banner
    Route::get('/banner-home',[BannerController::class,'index'])->name('banner.home');
    Route::post('/banner-home',[BannerController::class,'store'])->name('banner.add');
    // update-banner
    Route::get('banner-update',[BannerController::class,'edit'])->name('banner.edit');
    Route::post('/banner-update',[BannerController::class,'update'])->name('banner.update');
    // delete-banner
    Route::get('/banner-delete/{id}',[BannerController::class,'delete'])->name('banner.delete');


    // attr-product
    Route::get('/attr-home',[AttrController::class,'index'])->name('attr.home');
    // add-attr-product
    Route::get('/attr-add',[AttrController::class,'add'])->name('attr.add');
    Route::post('/attr-add',[AttrController::class,'store'])->name('attr.create');
    // update-attr-product
    Route::get('/attr-update/{id}',[AttrController::class,'edit'])->name('attr.edit');
    Route::post('/attr-update/{id}',[AttrController::class,'update'])->name('attr.update');
    // delete-attr-product
    Route::get('/attr-delete/{id}',[AttrController::class,'delete'])->name('attr.delete');


    // order   
    Route::resource('order',OrderController::class);
});

// Đăng nhập , đăng kí người dùng 

    Route::get('/account',[AccountController::class,'account'])->name('account');

    // Đăng kí 
    Route::post('/register',[AccountController::class,'register'])->name('account.register');

    // đăng nhập
    Route::post('/login',[AccountController::class,'login'])->name('account.login');



Route::prefix('/')->group(function(){
    Route::get('/',[HomeController::class,'home'])->name('home');
    //  product-detail
    Route::get('product-detail/{id}',[HomeController::class,'product'])->name('product.detail');
    Route::get('/see-all', [HomeController::class,'seeAll'])->name('see.all');
    Route::get('/top-buy',[HomeController::class,'TopBuy'])->name('product.top');


    
    // cart
    Route::middleware('checkUser')->prefix('/')->group(function () {
        Route::get('/user',[AccountController::class,'user'])->name('user');
        Route::get('logout-user', [AccountController::class,'logout'])->name('logout.user');
    
        Route::get('product-order',[OrderProductController::class,'order'])->name('product.order');
        Route::post('product-order',[OrderProductController::class,'addOrder'])->name('buy.order');
    
        Route::get('thanks',[OrderProductController::class,'thanks'])->name('buy.thanks');
    });
    Route::get('product-cart',[CartController::class,'cart'])->name('product.cart');
    Route::post('cart-add', [CartController::class,'add'])->name('cart.add');
    Route::post('cart-update',[CartController::class,'update'])->name('cart.update');
    Route::get('cart-delete/{id}',[CartController::class,'delete'])->name('cart.delete');

});
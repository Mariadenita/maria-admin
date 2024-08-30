<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SliderController;


Route::get("/product", [ProductController::class,"product"])->name("product");
Route::get('/addProduct', [ProductController::class, 'addproduct'])->name('addproduct');
Route::get('/addSlider', [SliderController::class, 'addslider'])->name('addslider');
Route::post('/upload-product', [ProductController::class, 'upload_product'])->name('upload');
Route::get("/", [SliderController::class,"slider"])->name("slider");
Route::get('/api/products', [ProductController::class, 'getProducts']);
Route::post('/upload/slider', [SliderController::class, 'upload'])->name('upload-slider');
Route::get('/api/sliders', [SliderController::class, 'getSliders']);
Route::get("/category", [CategoryController::class, "category"])->name("category");
Route::get("/addcategory", [CategoryController::class, "addcategory"])->name("addcategory");


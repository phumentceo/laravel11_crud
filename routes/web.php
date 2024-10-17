<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;


Route::get("/product",[ProductController::class,'index'])->name("product.index");
Route::get('/product/create',[ProductController::class,'create'])->name("product.create");
Route::get("/product/destroy/{id}",[ProductController::class,'destroy'])->name('product.destroy');
Route::post('/product/store',[ProductController::class,'store'])->name('product.store');
Route::get("/product/edit",[ProductController::class,'edit'])->name('product.edit');


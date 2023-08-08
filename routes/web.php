<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get("/products", [ProductController::class, 'index'])->name('products.index');
Route::get("/products/create", [ProductController::class, 'create'])->name('products.create');
Route::post("/products", [ProductController::class, 'store'])->name('products.store');
Route::get("/products/{product}/edit", [ProductController::class, 'edit'])->name('products.edit');
Route::patch("/products/{product}", [ProductController::class, 'update'])->name('products.update');
Route::delete("/products/{product}", [ProductController::class, 'destroy'])->name('products.delete');

Route::get("/sales", [SaleController::class, 'index'])->name('sales.index');
Route::get("/sales/create", [SaleController::class, 'create'])->name('sales.create');
Route::post("/sales", [SaleController::class, 'store'])->name('sales.store');

Route::get("/users", [UserController::class, 'index'])->name('users.index');

<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\SaleDetailController;
use App\Http\Controllers\UserController;
use App\Models\saleDetail;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get("/products", [ProductController::class, 'index'])->name('products.index');
Route::get("/products/create", [ProductController::class, 'create'])->name('products.create');
Route::post("/products", [ProductController::class, 'store'])->name('products.store');
Route::get("/products/{product}/edit", [ProductController::class, 'edit'])->name('products.edit');
Route::patch("/products/{product}", [ProductController::class, 'update'])->name('products.update');
Route::delete("/products/{product}", [ProductController::class, 'destroy'])->name('products.destroy');

Route::get("/sales", [SaleController::class, 'index'])->name('sales.index');
Route::get("/sales/create", [SaleController::class, 'create'])->name('sales.create');
Route::post("/sales", [SaleController::class, 'store'])->name('sales.store');
Route::get("/details", [SaleDetailController::class, 'index'])->name('details.index');

Route::get("/users", [UserController::class, 'index'])->name('users.index');
Route::get("/users/create", [UserController::class, 'create'])->name('users.create');
Route::post("/users", [UserController::class, 'store'])->name('users.store');
Route::get("/users/{user}/edit", [UserController::class, 'edit'])->name('users.edit');
Route::patch("/users/{user}", [UserController::class, 'update'])->name('users.update');
Route::delete("/users/{user}", [UserController::class, 'destroy'])->name('users.destroy');

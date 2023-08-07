<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;

class ProductController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $products = Product::get();
    return view('products.index', compact('products'));
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    return view('products.create', compact('product'));
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(StoreProductRequest $request)
  {
    Product::create($request->all());
    return redirect()->route('products.index');
  }

  /**
   * Display the specified resource.
   */
  public function show(Product $product)
  {
    return view('products.show', compact('product'));
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(Product $product)
  {
    return view('products.edit', compact('product'));
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(UpdateProductRequest $request, Product $product)
  {
    $product->update($request->all());
    return redirect()->route('products.index');
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Product $product)
  {
    $product->delete();
    return redirect()->route('products.index');
  }
}

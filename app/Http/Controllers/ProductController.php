<?php

namespace App\Http\Controllers;

use App\Http\Requests\Product\StoreRequest;
use App\Http\Requests\Product\UpdateRequest;
use App\Models\Product;


class ProductController extends Controller
{
  public function index()
  {
    $products = Product::get();
    return view('products.index')->with('products', $products);
  }

  public function create()
  {
    return view('products.create', ['product' => new product]);
  }

  public function store(StoreRequest $request)
  {
    Product::create($request->validated());
    return to_route('products.index')->with('status', 'Producto creado con exito');
  }

  public function edit(Product $product)
  {
    return view('products.edit', ['product' => $product]);
  }

  public function update(UpdateRequest $request, Product $product)
  {
    $product->update($request->validated());
    return to_route('products.index')->with('status', 'Producto actualizado con exito');
  }

  public function destroy(Product $product)
  {
    $product->delete();
    return to_route('products.index')->with('status', 'Producto eliminado con exito');
  }
}

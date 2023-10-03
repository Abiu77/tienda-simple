<?php

namespace App\Http\Controllers;

use App\Http\Requests\Sale\StoreRequest;
use App\Models\Product;
use App\Models\Sale;
use App\Models\User;

class SaleController extends Controller
{

  public function index()
  {
    $sales = Sale::get();
    return view('sales.index')->with('sales', $sales);
  }

  public function create()
  {
    $users = User::all();
    $products = Product::all();

    return view('sales.create', [
      'sale' => new Sale(),
      'users' => $users,
      'products' => $products,
    ]);
  }

  public function store(StoreRequest $request)
  {
    Sale::create($request->validated());
    return redirect()->route('sales.index')->with('success', 'Venta creada correctamente');
  }
}

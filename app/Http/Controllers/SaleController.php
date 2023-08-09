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
    $users = User::get();
    $products = Product::get();

    return view('sales.create', [
      'sale' => new sale,
      'users' => $users,
      'products' => $products
    ]);
  }

  public function store(StoreRequest $request)
  {
    Sale::create($request->validated());
    return to_route('sales.index')->with('status', 'Venta creada con exito');
  }
}

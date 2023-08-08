<?php

namespace App\Http\Controllers;

use App\Http\Requests\Sale\StoreRequest;
use App\Http\Requests\Sale\UpdateRequest;
use App\Models\Sale;

class SaleController extends Controller
{

  public function index()
  {
    $sales = Sale::get();
    return view('sales.index')->with('sales', $sales);
  }

  public function create()
  {
    return view('sales.create', ['sale' => new sale]);
  }

  public function store(StoreRequest $request)
  {
    Sale::create($request->validated());
    return to_route('sales.index')->with('status', 'Venta creada con exito');
  }

  /*  public function edit(Sale $sale)
  {
    return view('products.edit', ['product' => $sale]);
  }

  public function update(UpdateRequest $request, Sale $sale)
  {
    $sale->update($request->validated());
    return to_route('products.index')->with('status', 'Producto actualizado con exito');
  }

  public function destroy(Sale $sale)
  {
    $sale->delete();
    return to_route('products.index')->with('status', 'Producto eliminado con exito');
  } */
}

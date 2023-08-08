<?php

namespace App\Http\Controllers;

use App\Http\Requests\Sale\StoreRequest;
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
}

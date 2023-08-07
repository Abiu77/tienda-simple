<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use App\Http\Requests\StoreSaleRequest;
use App\Http\Requests\UpdateSaleRequest;

class SaleController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $sales = Sale::get();
    return view('sales.index', compact('sales'));
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    //
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(StoreSaleRequest $request)
  {
    $sale = Sale::create($request->all());
    foreach ($request->product_id as $key => $product) {
      $sale->shoppingDetails()->create([
        'product_id' => $product,
        'quantity' => $request->quantity[$key],
        "description" => $request->description[$key],
        'price' => $request->price[$key]
      ]);
    }
    $sale->saleDetails()->createMany($request->products);
    return redirect()->route('sales.index');
  }

  /**
   * Display the specified resource.
   */
  public function show(Sale $sale)
  {
    return view('sales.show', compact('sale'));
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(Sale $sale)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(UpdateSaleRequest $request, Sale $sale)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Sale $sale)
  {
    //
  }
}

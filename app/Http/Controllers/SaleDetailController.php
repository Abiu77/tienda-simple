<?php

namespace App\Http\Controllers;

use App\Models\saleDetail;
use App\Http\Requests\StoresaleDetailRequest;
use App\Http\Requests\UpdatesaleDetailRequest;

class SaleDetailController extends Controller
{
  public function index()
  {
    $saleDetails = saleDetail::get();
    return view('details.index')->with('details', $saleDetails);
  }
}

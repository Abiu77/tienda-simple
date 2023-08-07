<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class saleDetail extends Model
{
  use HasFactory;
  protected $fillable = [
    'sale_id',
    'product_id',
    'quantity',
    'price'
  ];
  public function sale()
  {
    return $this->belongsTo(Sale::class);
  }
  public function product()
  {
    return $this->belongsTo(Product::class);
  }
}

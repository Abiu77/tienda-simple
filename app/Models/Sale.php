<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
  use HasFactory;
  protected $fillable = [
    'user_id',
    'product_id',
    'sale_date',
    'total'
  ];

  public function user()
  {
    return $this->belongsTo(User::class);
  }
  public function product()
  {
    return $this->belongsTo(Product::class);
  }

  public function users()
  {
    return $this->hasMany(User::class);
  }

  public function products()
  {
    return $this->hasMany(Product::class);
  }
}

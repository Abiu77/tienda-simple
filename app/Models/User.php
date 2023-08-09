<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class User extends Model
{
  use HasFactory;
  protected $fillable = [
    'name',
    'lastname',
    'dni',
    'email',
  ];

  public function sales()
  {
    return $this->hasMany(Sale::class);
  }
}

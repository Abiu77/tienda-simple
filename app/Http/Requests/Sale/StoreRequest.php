<?php

namespace App\Http\Requests\Sale;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
  /**
   * Determine if the user is authorized to make this request.
   */
  public function rules(): array
  {
    return [
      'sale_date' => 'required|unique:products',
      'total' => 'required',
    ];
  }
  public function messages(): array
  {
    return [
      'sale_date.required' => 'El código es obligatorio',
      'total.required' => 'El precio es obligatorio',
    ];
  }
}

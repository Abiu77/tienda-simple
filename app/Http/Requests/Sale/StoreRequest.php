<?php

namespace App\Http\Requests\Sale;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
  public function authorize(): bool
  {
    return true;
  }

  /**
   * Get the validation rules that apply to the request.
   *
   * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
   */

  public function rules(): array
  {
    return [
      'user_id' => 'required|exists:users,id',
      'product_id' => 'required|exists:products,id',
      'total' => 'required|numeric',
    ];
  }
  public function messages(): array
  {
    return [
      'user_id' => 'El nombre del usuario es obligatorio',
      'product_id' => 'El nombre del producto es obligatorio',
      'total' => 'El precio es obligatorio',
    ];
  }
}

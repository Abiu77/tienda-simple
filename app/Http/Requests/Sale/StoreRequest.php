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
      'user_id' => ['required', 'exists:users,id'],
      'product_id' => ['required', 'exists:products,id'],
      'total' => ['required', 'numeric', 'min:0'],
    ];
  }

  /**
   * Get the error messages for the defined validation rules.
   *
   * @return array<string, string>
   */
  public function messages(): array
  {
    return [
      'user_id.required' => 'El campo usuario es requerido',
      'user_id.exists' => 'El usuario seleccionado no existe',
      'product_id.required' => 'El campo producto es requerido',
      'product_id.exists' => 'El producto seleccionado no existe',
      'total.required' => 'El campo total es requerido',
      'total.numeric' => 'El campo total debe ser un número',
      'total.min' => 'El campo total debe ser mayor a 0',
    ];
  }
}

<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
  /**
   * Determine if the user is authorized to make this request.
   */
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
      'name' => 'string|required|unique:products,name' . $this->route('product')->id . '|max:255',
      'description' => 'nullable|max:255',
      'sell_price' => 'required|',
    ];
  }
  public function messages(): array
  {
    return [
      'name.required' => 'El nombre es requerido',
      'name.string' => 'El nombre debe ser una cadena de caracteres',
      'name.unique' => 'El nombre ya existe',
      'name.max' => 'El nombre debe tener máximo 255 caracteres',
      'description.max' => 'La descripción debe tener máximo 255 caracteres',
      'sell_price.required' => 'El precio de venta es requerido',
    ];
  }
}

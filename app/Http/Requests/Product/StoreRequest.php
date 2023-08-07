<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
      'code' => 'required|unique:products',
      'name' => 'required',
      'description' => 'required',
      'sell_price' => 'required',
    ];
  }
  public function messages(): array
  {
    return [
      'code.required' => 'El código es obligatorio',
      'code.unique' => 'El código ya existe',
      'name.required' => 'El nombre es obligatorio',
      'description.required' => 'El descripción es obligatorio',
      'sell_price.required' => 'El precio es obligatorio',
    ];
  }
}

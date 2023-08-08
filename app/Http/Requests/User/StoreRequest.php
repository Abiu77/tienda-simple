<?php

namespace App\Http\Requests\User;

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
      'name' => 'required',
      'lastname' => 'required',
      'email' => 'required|unique:users',
    ];
  }
  public function messages(): array
  {
    return [
      'name.required' => 'El nombre es obligatorio',
      'lastname.required' => 'El apellido es obligatorio',
      'email.unique' => 'El código ya existe',
    ];
  }
}

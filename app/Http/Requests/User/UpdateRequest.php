<?php

namespace App\Http\Requests\User;

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
      'name' => 'required',
      'lastname' => 'required',
      'dni' => 'required',
      'email' => 'required',
    ];
  }
  public function messages(): array
  {
    return [
      'name.required' => 'El nombre es obligatorio',
      'lastname.required' => 'El apellido es obligatorio',
      'dni.required' => 'El dni es obligatorio',
      'email.required' => 'El email es obligatorio'
    ];
  }
}

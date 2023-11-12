<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserStepOneRequest extends FormRequest
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
   * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
   */
  public function rules(): array
  {
    return [
      "job_title" => "required",
      "first_name" => "required",
      "last_name" => "required",
      "email" => "required|email",
      "mobile_number" => "required",
      "address" => "required",
      "postal_code" => "required",
      "city" => "required",
      "country" => "required",
    ];
  }
}

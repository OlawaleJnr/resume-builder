<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserStepThreeRequest extends FormRequest
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
      "employee_job_title" => "required",
      "employeer" => "required",
      "start_date" => "required",
      "end_date" => "required",
      "employment_city" => "required",
      "employment_description" => "required",
    ];
  }
}

<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class FormStudentRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'FNameStud'=>['required', 'string'],
            'LNameStud'=>['required', 'string'],
            'EmailStud'=>['required','email','unique:students,EmailStud'],
            'PasswordStud'=>['required','string'],
            'PhoneStud'=>['nullable','string'],
            'PhotoStud' => ['nullable', 'image', 'mimes:jpeg,png,jpg,webp', 'max:2048'],
            'StatusStud'=>['nullable','string'],

        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class FormTeacherRequest extends FormRequest
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
        $teacher = $this->route('teacher');

        return [
            'FNameTeacher' => ['required', 'string'],
            'LNameTeacher' => ['required', 'string'],
            'EmailTeacher' => [
                'required',
                'email',
                Rule::unique('teachers', 'EmailTeacher')->ignore($teacher, 'MatTeacher'),
            ],
            'PasswordTeacher' => ['required', 'string'],
            'PhoneTeacher' => ['nullable', 'string'],
            'SpecTeacher' => ['nullable', 'string'],
            'PhotoTeacher' => ['nullable', 'image', 'mimes:jpeg,png,jpg,webp', 'max:2048'],
            'StatusTeacher' => ['nullable', 'string'],
        ];
    }
}

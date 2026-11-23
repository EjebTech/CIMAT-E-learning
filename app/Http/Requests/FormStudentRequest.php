<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

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
        $student = $this->route('student'); //récuperer le paramètre student dans l'URL actuelle de la réquête

        return [
            'FNameStud'=>['required', 'string'],
            'LNameStud'=>['required', 'string'],
            'EmailStud'=>[
                'required',
                'email',
                Rule::unique('students', 'EmailStud')->ignore($student, 'MatStud'), //L'email doit être unique sauf pour l'etudiant  qu'on doit modifier
            ],
            'PasswordStud'=>['required','string'],
            'PhoneStud'=>['nullable','string'],
            'PhotoStud' => ['nullable', 'image', 'mimes:jpeg,png,jpg,webp', 'max:2048'],
            'StatusStud'=>['nullable','string'],

        ];
    }
}

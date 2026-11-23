<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class FormFormationRequest extends FormRequest
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
        $formation = $this->route('formation');

        return [
            'NameFormation' => [
                'required',
                'string',
                Rule::unique('formations', 'NameFormation')->ignore($formation, 'IdFormation'),
            ],
            'DescFormation' => ['nullable', 'string'],
        ];
    }
}

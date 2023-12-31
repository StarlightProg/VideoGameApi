<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GameRequest extends FormRequest
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
        $rules = [
            'title' => 'required|max:255',
            'company' => 'required|max:255',
            'genres' => 'array',
        ];

        if ($this->isMethod('put') || $this->isMethod('patch')) {
            $rules['title'] = 'max:255';
            $rules['company'] = 'max:255';
        }

        return $rules;
    }
}

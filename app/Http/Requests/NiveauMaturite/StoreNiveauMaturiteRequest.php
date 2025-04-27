<?php

namespace App\Http\Requests\NiveauMaturite;

use Illuminate\Foundation\Http\FormRequest;

class StoreNiveauMaturiteRequest extends FormRequest
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
            'titre' => 'required|string|max:255',
            'desc' => 'required|string',
            'energie' => 'required|numeric',
            'poids_min' => 'required|numeric',
            'poids_max' => 'required|numeric',
            'age_max' => 'required|numeric',
            'age_min' => 'required|numeric'

        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CvRequest extends FormRequest
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
            'nom' => ['required','string','max:255'],
            'postnom' => ['required','string','max:255'],
            'prenom' => ['required','string','max:255'],
            'profession' => ['required','string','max:255'],
            'villeNaissance' => ['required','string','max:255' ],
            'dateNaissance' => ['required','string'],
            'adresse' => ['required','string','max:255'],
            'email' => ['required','email'],
            'telephone' => ['required','string','max:10'],
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateKomentarRequest extends FormRequest
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
            'komentar'=>'string|min:3|max:500'
        ];
    }
    public function messages(): array
    {
        return [
            'komentar.string'=> 'Komentar harus berupa string',
            'komentar.min:3'=> 'Komentar minimal 3 karakter',
            'komentar.min:500'=> 'Komentar maksimal 500 karakter',
        ];
    }
}

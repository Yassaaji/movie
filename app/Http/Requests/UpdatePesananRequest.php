<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePesananRequest extends FormRequest
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
            'alasan' => 'required|max:500|string'
        ];
    }

    public function messages(): array
    {
        return [
            'alasan.required' => 'alasan tidak boleh kosong',
            'alasan.max:500' =>  'alasa tidak boleh lebih dari 500 karakter',
            'alasan.string' => 'alasan harus berupa string',
        ];
    }
}

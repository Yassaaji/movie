<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateprofileRequest extends FormRequest
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
            'name'=>'required|string',
            'noTelp' => 'numeric|unique:users|regex:/^08\d{9,12}$/',
        ];
    }
    public function messages()
    {
        return [
            'name.required'=>'Nama tidak boleh kosong',
            'name.string'=>'Nama harus berupa string',
            'noTelp.regex' => 'nomor telp harus berawalan 08 dan panjang nomor antara 11-13',
            'noTelp.numeric' => 'nomor telp harus diisi dengan nomor',
            'noTelp.unique' => 'nomor telp sudah digunakan oleh orang lain'
        ];
    }
}

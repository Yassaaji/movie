<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePesananRequest extends FormRequest
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
            //
            'payment' => 'required',
            'bukti_pembayaran' => 'image|max:10000'
        ];
    }

    public function messages():array
    {
        return[
            'payment.required' => 'Harus mengisi metode pembayaran',
            'bukti_pembayaran.image' => "Bukti pembayaran bertipe gambar",
            'bukti_pembayaran.max:10000' => "Ukuran gambar melebihi batasan",
        ];
    }
}

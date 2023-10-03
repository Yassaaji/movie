<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFilmRequest extends FormRequest
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
            'judul'=>'required|string',
            'director'=>'required|string',
            'cast'=> 'required|string',
            'minimal_usia'=> 'required|integer',
            'genre' => 'required|string',
            'durasi'=> 'required|string',
            'jadwal_tayang' => 'required',
            'jam_tayang'=> 'required',
            'trailer' => 'required',
            'sinopsis' => 'required|string',
            'ruangan' => 'required',
            'status' => 'required',
            'harga' => 'required|integer',
            'thumbnile' => 'image'
        ];
    }

    public function messages(): array
    {
        return [
            'judul.required' => 'Judul wajid diisi',
            'director.required' => 'Director wajib diisi',
            'cast.required' => 'Cast wajib diisi',
            'minimal_usia.required' => 'Minimal usia wajib diisi',
            'genre.required' => 'Genre wajib diisi',
            'jadwal_tayang.required' => 'jadwal tayang wajib diisi',
            'jam_tayang.required' => 'Jam tayang wajib diisi',
            'trailer.required' => 'Video tailer wajib diisi',
            'sinopsis.required' => 'Sinopsis wajib diisi',
            'ruangan.required' => 'Ruangan wajib diisi',
            'status.required' => 'Status wajib diisi',
            'harga.required' => 'Harga wajib diisi',

        ];
    }
}


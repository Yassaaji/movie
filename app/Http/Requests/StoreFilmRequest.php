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
            'minimal_usia'=> 'required|integer|gt:0',
            'genre' => 'required|string',
            'durasi'=> 'required|string',
            'jadwal_tayang' => 'required|after_or_equal:today',
            'jam_tayang'=> 'required',
            'trailer' => 'required',
            'sinopsis' => 'required|string|max:1000',
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
            'minimal_usia.gt:0' => 'Minimal usia tidak boleh minus',
            'genre.required' => 'Genre wajib diisi',
            'jadwal_tayang.required' => 'jadwal tayang wajib diisi',
            'jam_tayang.required' => 'Jam tayang wajib diisi',
            'trailer.required' => 'Video tailer wajib diisi',
            'sinopsis.required' => 'Sinopsis wajib diisi',
            'sinopsis.max:1000' => 'Sinopsis maksimal 1000 karakter',
            'ruangan.required' => 'Ruangan wajib diisi',
            'status.required' => 'Status wajib diisi',
            'harga.required' => 'Harga wajib diisi',
            'jadwal_tayang.after_or_equal' => 'Jadwal film tidak boleh kemarin'
        ];
    }
}


<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreateComingSoonController extends Controller
{
    public function create()
    {
        return view ('admin.create-comingsoon');
    }

    // Tambahkan method untuk menyimpan data
    public function store(Request $request)
    {
        // Lakukan validasi data yang dikirimkan oleh form
        $validatedData = $request->validate([
            'judul' => 'required|string|max:255',
            'director' => 'required|string|max:255',
            'cast' => 'required|string|max:255',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Atur sesuai kebutuhan
        ]);

        // Proses penyimpanan data ke dalam database atau penyimpanan file foto

        // Redirect ke halaman lain setelah berhasil menyimpan data
        return redirect()->route('nama_route_yang_anda_inginkan')->with('success', 'Data film berhasil ditambahkan.');
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFilmRequest;
use App\Http\Requests\UpdateFilmRequest;
use App\Models\Film;

use function Symfony\Component\String\b;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.create-film');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFilmRequest $request)
    {

        // dump($request);

        $request->validate([
            "judul"=>'nullable|string',
            'director'=>'nullable|string',
            'cast'=> 'nullable|string',
            'minimal_usia'=> 'nullable|integer',
            'genre' => 'nullable||string',
            'durasi'=> 'string|nullable',
            'jadwal_tayang' => "nullable",
            'video_trailer' => 'nullable',
            'sinopsis' => 'nullable||string',
            'status' => 'nullable||required',
            'thumbnile' => 'image'
        ]);


        $thumbnile = $request->file('thumbnile');
        $thumbnileName = uniqid() . '.' . $thumbnile->getClientOriginalExtension();
        $thumbnile->storeAs('public/thumbnile/', $thumbnileName);

        $film = new Film;
        $film->judul = $request->judul;
        $film->director = $request->director;
        $film->cast = $request->cast;
        $film->minimal_usia =  $request->minimal_usia;
        $film->genre = $request->genre;
        $film->durasi = $request->durasi;
        $film->jadwal_tayang = $request->jadwal_tayang;
        $film->trailer = $request->trailer;
        $film->sinopsis = $request->sinopsis;
        $film->status = $request->status;

        $film->thumbnile = $thumbnileName;

        if( $film->save() ){
            return back()->with('success','upload berhasil');
        }else{
            return back()->with('error','upload gagal');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Film $film)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        return view('admin.editfilm');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFilmRequest $request, Film $film)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Film $film)
    {
        //
    }
}

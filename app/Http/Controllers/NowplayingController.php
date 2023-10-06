<?php

namespace App\Http\Controllers;

use App\Models\Film;
use App\Models\nowplaying;
use App\Http\Requests\StorenowplayingRequest;
use App\Http\Requests\UpdatenowplayingRequest;
use App\Models\Genre;

class NowplayingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         return view('nowplaying');
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
    public function store(StorenowplayingRequest $request)
    {

        $request->validate([
            "judul"=>'nullable|string',
            'director'=>'nullable|string',
            'cast'=> 'nullable|string',
            'minimal_usia'=> 'nullable|integer',
            'genre' => 'nullable||string',
            'durasi'=> 'string|nullable',
            'jadwal_tayang' => "nullable",
            'jam_tayang'=> 'required',
            'video_trailer' => 'nullable',
            'sinopsis' => 'nullable||string',
            'status' => 'nullable||required',
            'thumbnile' => 'image'
        ]);


        $thumbnile = $request->file('thumbnile');
        $thumbnileName = uniqid() . '.' . $thumbnile->getClientOriginalExtension();
        $thumbnile->storeAs('thumbnile/', $thumbnileName);

        $film = new Film;
        $film->judul = $request->judul;
        $film->director = $request->director;
        $film->cast = $request->cast;
        $film->minimal_usia =  $request->minimal_usia;
        $film->genre = $request->genre;
        $film->durasi = $request->durasi;
        $film->jadwal_tayang = $request->jadwal_tayang;
        $film->jam_tayang = $request->jam_tayang;
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
    public function show(film $film)
    {
        return view('detailfilm',compact('film'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function daftarFilm()
    {
        $films = Film::all();
        $films = Film::paginate(2);
        return view('admin.daftarnowplaying', compact('films'));
    }

    public function genre($genre)
    {
        $nowplayings = Film::where('status','nowplaying')
        ->where('genre_id',$genre)
        ->get();
        $genre = Genre::all();
        return view('nowplaying',compact('nowplayings','genre'));
    }

    public function edit(nowplaying $nowplaying)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatenowplayingRequest $request, nowplaying $nowplaying)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(nowplaying $nowplaying)
    {

    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFilmRequest;
use App\Http\Requests\UpdateFilmRequest;
use App\Models\Film;
use App\Models\Ticket;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Response;
use Illuminate\Pagination\LengthAwarePaginator;


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
            'jam_tayang'=> 'required',
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
        $film->jam_tayang = $request->jam_tayang;
        $film->trailer = $request->trailer;
        $film->sinopsis = $request->sinopsis;
        $film->status = $request->status;
        $film->thumbnile = $thumbnileName;

        $ticket = Ticket

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
        // dd($film);
        return view('detailfilm',compact('film'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function daftarFilm()
    {
        $films = Film::all();
        $films = Film::paginate(2);
        // dd($film);
        return view('admin.daftarfilm',compact('films'));
    }

    public function edit(int $id){
        // dd($id);
        $film = Film::where('id',$id)->get();
        return view('admin.edit-film',compact('film'));
    }



    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFilmRequest $request, Film $film)
    {

        // dd($request);
        // dd($film);


        $request->validate([
            "judul"=>'string',
            'director'=>'string',
            'cast'=> 'string',
            'minimal_usia'=> 'integer',
            'genre' => 'string',
            'durasi'=> 'string',
            'jadwal_tayang' => "",
            'trailer' => 'url',
            'sinopsis' => 'string',
            'status' => 'required',
            'thumbnile' => 'image'
        ]);

        // Update data yang tidak terkait dengan file gambar
        $film->judul = $request->judul;
        $film->director = $request->director;
        $film->cast = $request->cast;
        $film->minimal_usia = $request->minimal_usia;
        $film->genre = $request->genre;
        $film->durasi = $request->durasi;
        $film->jadwal_tayang = $request->jadwal_tayang;
        $film->trailer = $request->trailer;
        $film->sinopsis = $request->sinopsis;
        $film->status = $request->status;

        // Periksa apakah file gambar baru diberikan
        if ($request->hasFile('thumbnile')) {
            $thumbnile = $request->file('thumbnile');
            $thumbnileName = uniqid() . '.' . $thumbnile->getClientOriginalExtension();
            $thumbnile->storeAs('public/thumbnile/', $thumbnileName);

            // Hapus file gambar lama jika perlu
            Storage::delete('public/thumbnile/' . $film->thumbnile);

            // Update kolom thumbnile dengan nama file yang baru
            $film->thumbnile = $thumbnileName;
        }

        $film->save();

        return redirect()->route('daftarfilm')->with('success', 'film berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Film $film)
    {
        Storage::delete('public/thumbnile/' . $film->thumbnile);
        $film->delete();
        return back();
    }
}

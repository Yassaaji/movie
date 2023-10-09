<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFilmRequest;
use App\Http\Requests\UpdateFilmRequest;
use App\Models\Film;
use App\Models\Genre;
use App\Models\Komentar;
use App\Models\Penayangan;
use App\Models\Ruangan;
use App\Models\Ticket;
use Carbon\Carbon;
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
        $genre = Genre::all();
        // dd($genre);
        return view('admin.create-film',compact('genre'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFilmRequest $request)
    {

        $date = Carbon::parse($request->jadwal_tayang);
        $jadwal_berkahir = $date->copy()->addDay();
        // dd($jadwal_berkahir);

        $ruanganFilmTerdahulu = Ruangan::where('nama_ruangan',$request->ruangan)->first();
        $filmTerdahulu = Film::where('jam_tayang',$request->jam_tayang)->where('jadwal_tayang',$request->jadwal_tayang)->where('ruangan_id',$ruanganFilmTerdahulu->id)->first();
        if($filmTerdahulu){
            return redirect()->route('daftarfilm')->with('error','Pembuatah film gagal karena jadwal sudah digunakan');
        }


        $thumbnile = $request->file('thumbnile');
        $thumbnileName = uniqid() . '.' . $thumbnile->getClientOriginalExtension();
        $thumbnile->storeAs('thumbnile/', $thumbnileName);

        $film = new Film;
        $film->judul = $request->judul;
        $film->director = $request->director;
        $film->cast = $request->cast;
        $film->minimal_usia =  $request->minimal_usia;
        $film->genre_id = $request->genre;
        $film->durasi = $request->durasi;
        $film->jadwal_tayang = $request->jadwal_tayang;
        $film->jadwal_berakhir = $jadwal_berkahir;

        $film->jam_tayang = $request->jam_tayang;
        $film->trailer = $request->trailer;
        $film->sinopsis = $request->sinopsis;
        $film->status = $request->status;
        $film->thumbnile = $thumbnileName;

        $ruangan = Ruangan::where('nama_ruangan',$request->ruangan)->first();
        $film->ruangan_id = $ruangan->id;
        $film->harga = $request->harga;
        $film->save();


        $penayangan = new Penayangan;
        $penayangan->film_id = $film->id;
        $penayangan->penonton = 0;
        $penayangan->pendapatan = 0;

        $penayangan->save();

        return redirect()->route('daftarfilm')->with('success', 'berhasil menambah data');
    }

    /**
     * Display the specified resource.
     */
    // $ruangan = Ruangan::where('id',$film->ruangan_id)->first();
    // $ticket = Ticket::with('ruangan')->where('film_id',$film->id)->first();
    // dd($film);
    public function show(Film $film)
    {
        $film->load('ruangan','genre');
        $komentar = Komentar::where('film_id',$film->id)->get();
        return view('detailfilm',compact('film','komentar'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function daftarFilm()
    {
        $today = Carbon::now();

        if (Film::whereDate('jadwal_berakhir', '<=', $today)->exists()) {
            Film::whereDate('jadwal_berakhir', '<=', $today)->update(['status' => 'finish']);
        }

        if(Film::whereDate('jadwal_tayang','<=',$today)->exists()){
            Film::whereDate('jadwal_tayang', '<=', $today)->update(['status' => 'nowplaying']);
        }

        // Mengambil daftar film dengan relasi genre
        $films = Film::with('genre')->paginate(2);

        return view('admin.daftarfilm', compact('films'));
    }


    public function edit(int $id){
        $film = Film::with('ruangan','genre')->where('id',$id)->get()[0];
        $genre= Genre::all();
        return view('admin.edit-film',compact('film','genre'));
    }



    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFilmRequest $request, Film $film)
    {
        // dd($request);
        $request->validate([
            "judul"=>'string',
            'director'=>'string',
            'cast'=> 'string',
            'minimal_usia'=> 'integer',
            'genre_id' => 'string',
            'durasi'=> 'string',
            'jadwal_tayang' => "",
            'trailer' => 'url',
            'sinopsis' => 'string',
            'status' => 'required',
            'thumbnile' => 'image'
        ]);

        $filmLama = Film::where('id', $request->id)->first();
        if (!empty($request->file('thumbnail'))) {
            $thumbnile = $request->file('thumbnail');
            $thumbnileName = uniqid() . '.' . $thumbnile->getClientOriginalExtension();
            Storage::delete('thumbnile/'. $filmLama->thumbnile);
            $thumbnile->storeAs('thumbnile/', $thumbnileName);
        }

        $data = [
            'judul' => $request->judul,
            'director' => $request->director,
            'cast' => $request->cast,
            'minimal_usia' => $request->minimal_usia,
            'genre_id' => $request->genre,
            'durasi' => $request->durasi,
            'jadwal_tayang' => $request->jadwal_tayang,
            'jam_tayang' => $request->jam_tayang,
            'trailer' => $request->trailer,
            'sinopsis' => $request->sinopsis,
            'status' => $request->status,
            'thumbnile' => empty($request->file('thumbnail')) ? $filmLama->thumbnile : $thumbnileName,
            // 'thumbnile' => $thumbnileName,
        ];

        $filmLama->update($data);
        return redirect()->route('daftarfilm')->with('success', 'film berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Film $film)
    {
        Storage::delete('thumbnile/' . $film->thumbnile);
        $film->delete();
        return redirect()->route('daftarfilm')->with('success', 'Data berhasil dihapus');
    }


}

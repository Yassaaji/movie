<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFilmRequest;
use App\Http\Requests\UpdateFilmRequest;
use App\Models\Film;
use App\Models\Genre;
use App\Models\Komentar;
use App\Models\Penayangan;
use App\Models\Ruangan;
use App\Models\status_kursi;
use App\Models\Ticket;
use Carbon\Carbon;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Response;
use Illuminate\Pagination\LengthAwarePaginator;
use Laravel\Ui\Presets\React;

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
        $film->total_penonton = 0;
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
        $film->load('ruangan','genre','rate');

        $akmRating = $film->rate()->avg('rate');
        $bintang = floor($akmRating);
        // dd($akmRating);

        $komentar = Komentar::where('film_id',$film->id)->get();
        return view('detailfilm',compact('film','komentar','akmRating','bintang'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function daftarFilm()
    {
        $today = Carbon::now();
        $today->addDay(0);
        // dd($today);
        if (Film::whereDate('jadwal_berakhir', '<=', $today)->exists()) {
            Film::whereDate('jadwal_berakhir', '<=', $today)->update(['status' => 'finish']);
        }else if(Film::whereDate('jadwal_tayang','<=',$today)){
            Film::whereDate('jadwal_tayang', '<=', $today)->update(['status' => 'nowplaying']);
        }


        // Mengambil daftar film dengan relasi genre
        $films = Film::with('genre')->get();
// dd($films);
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
            "judul"=>'string|max:100',
            'director'=>'string|max:100',
            'cast'=> 'string|max:100',
            'minimal_usia'=> 'integer|gt:0',
            'genre_id' => 'string',
            'durasi'=> 'max:10',
            'jadwal_tayang' => "date",
            'trailer' => 'url|max:500',
            'sinopsis' => 'string|max:1000',
            'status' => 'required',
            'thumbnile' => 'image|max:50000'
        ],[
            'judul.string' => 'judul harus menggunakan string',
            'judul.max' => 'Judul maksimal 100 karakter',
            'direcor.string'=> 'director harus menggunakan string',
            'direcor.max'=> 'director maksimal menggunakan 100 karakter',
            'cast.string' => 'cast harus menggunakan string',
            'cast.max'=>'cast maksimal 100 karakter',
            'minimal_usia.integer' => 'minimal usia harus berupa angka',
            'minimal_usia.gt'=> 'minimal usia tidak boleh melebihi 100 karakter',
            'durasi.max' => 'Durasi maksimal 10 karakter, kamu dapat menggunakan 90 untuk mewakili 90 menit',
            'jadwa_tayang.date' => 'jadwal_tayang harus berupa tanggal',
            'trailer.url' => 'trailer harus berupa url',
            'trailer.max' => 'maksimal trailer 500 karakter',
            'sinopsis.string' => 'sinopsis harus berupa string',
            'sinopsis.max' => 'maksimal sinopsis adalah 1000 karakter',
            'status.required' => 'status tidak boleh kosong',
            'thumbnile.image' => 'thumbnile hanya bisa gambar',
            'thumbnile.max' => 'thumbnile maksimal 50MB'
        ]
    );

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


        try {

            $film->delete();
            Storage::delete('thumbnile/' . $film->thumbnile);

        } catch (QueryException $e) {

            $film->status = "finish";
            $film->save();
            // if($e->errorInfo[1] == 1451) {
            //     return redirect()->route('daftarfilm')->with('error', 'Film sudah pernah dipesan');
            // }
        }

        return redirect()->route('daftarfilm')->with('success', 'Data berhasil dihapus');

    }

    public function aturJadwal(Request $request, $film_id ){


        $request->validate([
            'jadwal_tayang' => 'after_or_equal:today'
        ],[
            'jadwal_tayang.after_or_equal' => 'Pengaturan jadwal film tidak boleh hari kemarin'
        ]);



        $penayanganLama = Penayangan::where('film_id',$film_id)->orderBy('id','desc')->first();

        $penayangan = new Penayangan;
        $penayangan->film_id = $film_id;
        $penayangan->penonton = $penayangan->penonton + $penayanganLama->penonton;
        $penayangan->pendapatan = $penayanganLama->pendapatan + $penayangan->pendapatan;
        $penayangan->save();

        $jadwal_tayang   = $request->input('jadwal_tayang');
        $jadwal_berkahir =  Carbon::parse($jadwal_tayang);
        $jadwal_berkahir->addDay();
        // dd($jadwal_berkahir);
        $film = Film::where('id',$film_id)->first();
        $film->jadwal_tayang = $jadwal_tayang;
        $film->jadwal_berakhir = $jadwal_berkahir;
        $film->status = 'commingsoon';
        $film->save();

        // $kursi = status_kursi::where('film_id',$film_id)->where('penayangan_id',$penayanganLama->id)->get();


        // $kursi->save();
        // dd($kursi);


        return redirect()->route('daftarfilm')->with('success','Sukses mengatur jadwal penayangan baru');
    }

    public function filmselesai(){

        $films = Film::where('status','finish')->get();

        return view('admin.daftar-selesai',compact('films'));
    }


    public function atur_jadwal($request,Film $film)
    {

    }


}

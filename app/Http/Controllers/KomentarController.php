<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreKomentarRequest;
use App\Http\Requests\UpdateKomentarRequest;
use App\Models\Komentar;
use Illuminate\Support\Facades\Auth;

class KomentarController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreKomentarRequest $request , $film_id)
    {
        // dd($request);
        $komentar = new Komentar;
        $komentar->user_id = Auth::user()->id;
        $komentar->film_id = $film_id;
        $komentar->content = $request->komentar;
        $komentar->parent_id = $request->komentar_id;


        try {
            //code...
            $komentar->save();
            return redirect()->back()->with('success','Berhasil mengirim komentar');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error','Gagal mengirim komentar');
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(Komentar $komentar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Komentar $komentar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKomentarRequest $request, Komentar $komentar)
    {
        // dd($komentar);
        $komentar->load('film');
        $komentar->user_id = Auth::user()->id;
        $komentar->film_id = $komentar->film->id;
        $komentar->content = $request->komentar;
      if($komentar->parent_id == null){
          $komentar->parent_id = $request->komentar_id;
      }


        try {
            //code...
            $komentar->save();
            return redirect()->back()->with('success','Berhasil mengubah komentar');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error','Gagal mengubah komentar');
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Komentar $komentar)
    {

        // dd($komentar);
        if($komentar){
            $childKomentar = Komentar::where('parent_id',$komentar->id)->get();

            // dd($childKomentar);
            foreach ($childKomentar as $data) {
                $data->delete();
            }
            $komentar->delete();
            return redirect()->back()->with('berhasil');
        }else{
            return redirect()->back()->with('error','Komentar gagal terhapus');
        }
    }
}

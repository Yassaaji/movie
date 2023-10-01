<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePesananRequest;
use App\Http\Requests\UpdatePesananRequest;
use App\Models\Film;
use App\Models\Kursi;
use App\Models\Pesanan;
use App\Models\Ticket;
use Exception;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Stmt\TryCatch;
use SebastianBergmann\Exporter\Exporter;

class PesananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Pesanan::with('Bank','ticket','film','ewallet')->where('konfirmasi','menunggu')->get();
        $kursi = Kursi::whereNotNull('ticket_id')->get();

        // dd($orders);
        return view('admin.konfirmasi-ticket',compact('orders','kursi'));
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
    public function store(StorePesananRequest $request, int $film_id)
    {
        // $ticket = Ticket::with('film')->where('id',$ticket_id)->first();
        $film = Film::where('id',$film_id)->first();
        $kursi_pesanan = $request->tickets;
        $total_harga = $film->harga * count($kursi_pesanan);

        // dd($request);

        $ticket = new Ticket;
        $ticket->user_id = Auth::user()->id;
        $ticket->film_id = $film->id;

        $kursi_id = collect([]);
        $ticket->save();

        $idUser = Auth::user()->id;

        foreach ($kursi_pesanan as $data) {
            $kursi = Kursi::where('ruangan_id',$film->ruangan_id)->where('nomor_kursi',$data)->first();
            $kursi->user_id = $idUser;
            $kursi->ticket_id = $ticket->id;
            $kursi->save();
        }



        $pesanan = new Pesanan;
        $pesanan->ticket_id = $ticket->id;
        $pesanan->totalharga = $total_harga;
        $pesanan->film_id = $film_id;
        // $pesanan->
        $imgBukti = $request->file('bukti_pembayaran');

        if($imgBukti === null){
            $pesanan->bank_id = null;

        }else{
            $imgBuktiName = uniqid() . '.' . $imgBukti->getClientOriginalExtension();
            $imgBukti->storeAs('bukti/', $imgBuktiName);
            $pesanan->bukti_pembayaran = $imgBuktiName;

            if($request->payment === "ewallet"){
                $pesanan->bank_id = null;
                $pesanan->ewallet_id = $request->ewalletId;
            }
            if($request->payment === "bank"){
                $pesanan->ewallet_id = null;
                $pesanan->bank_id = $request->bankid;
            }

        }


        $pesanan->save();

        return redirect()->back()->with('succes','berhasil memesan ticket');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pesanan $pesanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pesanan $pesanan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePesananRequest $request, Pesanan $pesanan)
    {
        // dd($request);

        if($request->status === "sukses"){
            $pesanan->konfirmasi = "sukses";
        }else if($request->status === "ditolak"){
            $pesanan->konfirmasi = "ditolak";
        }else{
            return redirect()->back()->with('error','Gagal Konfirmasi Pesanan');
        }

        $pesanan->save();
        return redirect()->back()->with('succes','Gagal Konfirmasi Pesanan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pesanan $pesanan)
    {
        //
    }
}

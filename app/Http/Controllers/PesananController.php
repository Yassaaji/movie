<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePesananRequest;
use App\Http\Requests\UpdatePesananRequest;
use App\Mail\ticketCancel;
use App\Mail\ticketSuccess;
use App\Models\Film;
use App\Models\Kursi;
use App\Models\Pesanan;
use App\Models\status_kursi;
use App\Models\Ticket;
use App\Models\Pendapatan;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
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
        // $kursi = Kursi::whereNotNull('ticket_id',)->get();

        $status_kursi = status_kursi::all();


        $orders = Pesanan::paginate(2);


        // dd($status_kursi);
        return view('admin.pendapatan',compact('orders','status_kursi'));
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
        // dd($request);
        // $ticket = Ticket::with('film')->where('id',$ticket_id)->first();
        $film = Film::where('id',$film_id)->first();
        $kursi_pesanan = $request->tickets;
        try {
            //code...
            $total_harga = $film->harga * count($kursi_pesanan);
        } catch (\Throwable $th) {
            //throw $th;
            return back()->with('error','Harus memilih minimal 1 kursi');
        }


        $ticket = new Ticket;
        $ticket->user_id = Auth::user()->id;
        $ticket->film_id = $film->id;

        $kursi_id = collect([]);

        $idUser = Auth::user()->id;

        try {
            //code...
            $ticket->save();
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->back()->with('error',"Kursi sudah dipesan");
        }

        foreach ($kursi_pesanan as $data) {

            $status = status_kursi::where('film_id',$film_id)->get();
            foreach ($status as $st) {
                if($data === $st->nomor_kursi){
                    return redirect()->back()->with('error',"Kursi sudah dipesan");
                }
            }

            $kursi = Kursi::where('ruangan_id',$film->ruangan_id)->where('nomor_kursi',$data)->first();

            $status_kursi = new status_kursi;
            $status_kursi->film_id = $film_id;
            $status_kursi->kursi_id = $kursi->id;
            $status_kursi->nomor_kursi = $data;
            $status_kursi->status_kursi = "dipesan";
            $status_kursi->ticket_id = $ticket->id;

            try {

                $status_kursi->save();
            } catch (\Throwable $th) {
                return redirect()->back()->with('error','kursi gagal disave');
            }

            $kursi->ticket_id = null;
            try {
                //code...
                $kursi->save();
            } catch (\Throwable $th) {
                //throw $th;
                return redirect()->back()->with('error','kursi gagal disave');
            }
        }



        $pesanan = new Pesanan;
        $pesanan->ticket_id = $ticket->id;
        $pesanan->totalharga = $total_harga;
        $pesanan->film_id = $film_id;
        $pesanan->user_id = Auth::user()->id;
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
            if($request->payment === "atm"){
                $pesanan->ewallet_id = null;
                $pesanan->bank_id = $request->bankid;
            }
        }
        // dd($request);


        try {
            //code...
            // $kursi->save();
            $pesanan->save();
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->back()->with('error','pesanan gagal disave');
        }


        return redirect()->back()->with('success','berhasil memesan ticket');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pesanan $pesanan)
    {
        //
    }

    public function konfirmasiTicket()
    {

        // dd($film);
        return view('admin.konfirmasi_ticket',compact('pesanan'));
    }
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
        $pesanan->load('user','film','ticket');
        $status_kursi = status_kursi::where('ticket_id',$pesanan->ticket->id)->get();
        // dd($status_kursi);
        if($request->status === "sukses"){
            $pesanan->konfirmasi = "sukses";
            Mail::to($pesanan->user->email)->send(new ticketSuccess($pesanan,$status_kursi));
        }else if($request->status === "ditolak"){
            $pesanan->konfirmasi = "ditolak";
            $pesanan->alasan = $request->alasan;
            Mail::to($pesanan->user->email)->send(new ticketCancel($pesanan));


            $status_kursi = status_kursi::where('ticket_id',$pesanan->ticket->id)->get();
            foreach($status_kursi as $kursi){
                $kursi->delete();
            }

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

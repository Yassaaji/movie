<?php

namespace App\Http\Controllers;

use App\Models\Bank;
use App\Models\Ticket;
use App\Http\Requests\StoreticketRequest;
use App\Http\Requests\UpdateticketRequest;
use App\Models\Ewallet;
use App\Models\Film;
use App\Models\Kursi;
use App\Models\status_kursi;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function DataTiketPage(){
        // return view('datatiket');
     }


    public function index()
    {

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
    public function store(StoreticketRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function orderTicket(Film $film)
    {


        $film->load('ruangan');
        $kursi = Kursi::with('status_kursi')->where('ruangan_id',$film->ruangan->id)->get();
        $bank = Bank::all();
        $ewallets = Ewallet::all();

        $status_kursi = status_kursi::where('film_id',$film->id)->get();
        // dd($status_kursi);

        return view('order-ticket',compact('kursi','film','bank','ewallets','status_kursi'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ticket $ticket)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateticketRequest $request, ticket $ticket)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ticket $ticket)
    {
        //
    }
}

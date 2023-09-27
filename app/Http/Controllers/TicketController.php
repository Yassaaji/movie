<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use App\Http\Requests\StoreticketRequest;
use App\Http\Requests\UpdateticketRequest;
use App\Models\Kursi;

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
    public function show( int $id)
    {
        $ticket = Ticket::with('ruangan')->where('id',$id)->first();
        $kursi = Kursi::where('ruangan_id',$ticket->ruangan->id)->get();
        // dd($kursi);

        // dd($ticket);
        return view('order-ticket',compact('kursi','ticket'));
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

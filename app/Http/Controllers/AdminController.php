<?php

namespace App\Http\Controllers;

use App\Models\Film;
use App\Models\pendapatan;
use App\Models\Pesanan;
use App\Models\status_kursi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $totalUser = User::where('role', 'user')->count();
        $menungguKonfirmasi = Pesanan::where('konfirmasi',"menunggu")->get()->count();
        $jumlahFilm = Film::all()->count();
        $jumlahTicket = status_kursi::all()->count();
        $pendapatan = pendapatan::all();

        $newOrder = Pesanan::with('user')->where('konfirmasi','menunggu')->latest()->first();

        // dd($newOrder);

        $totalPendapatan = 0;

        foreach ($pendapatan as $data) {
            $totalPendapatan = $totalPendapatan + $data->pendapatan;
        }

        return view('admin.dashboard', compact('totalUser','menungguKonfirmasi','jumlahFilm','jumlahTicket','pendapatan','newOrder','totalPendapatan'));
        // return view('admin.dashboard');
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

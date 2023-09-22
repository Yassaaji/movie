<?php

namespace App\Http\Controllers;

use App\Models\profile;
use App\Http\Requests\StoreprofileRequest;
use App\Http\Requests\UpdateprofileRequest;
use App\Models\User;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Ambil pengguna yang sedang login
        $user = auth()->user()->id; // Menggunakan metode auth() untuk mengambil pengguna yang sedang login
        $profile = User::where('id',$user)->get();
        // dump($profile);
        return view('profile', compact('profile'));
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
    public function store(StoreprofileRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(profile $profile)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(profile $profile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateprofileRequest $request, profile $profile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(profile $profile)
    {
        //
    }
}

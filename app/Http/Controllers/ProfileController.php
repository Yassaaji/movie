<?php

namespace App\Http\Controllers;

use App\Models\profile;
use App\Http\Requests\StoreprofileRequest;
use App\Http\Requests\UpdateprofileRequest;
use App\Models\Kursi;
use App\Models\Pesanan;
use App\Models\Rate;
use App\Models\status_kursi;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Ambil pengguna yang sedang login
        $person = Auth()->user()->id; // Menggunakan metode auth() untuk mengambil pengguna yang sedang login
        $data = User::where('id',$person)->paginate(1);
        $historypesanan = Pesanan::with('film')->where('user_id',$person)->get();
        $kursiPesanan = Kursi::with('status_kursi')->has('status_kursi')->get();
        $user = User::with('rate')->where('id',Auth::user()->id)->first();
        // dd($user);
        return view('profile', compact('data','historypesanan','kursiPesanan','user'));
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

    public function profile()
    {
        $data = user::all();
        $data = user::paginate(2);
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        $data = User::where('id',Auth::user()->id)->get();
        return view('editprofil',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateprofileRequest $request, User $user , $id)
    {
        // dd($request);
        $user = User::find($id);

        $user->name = $request->name;
        $user->noTelp = $request->noTelp;

        if ($request->hasFile('fotoprofil')) {
            $newFotoProfile = $request->file('fotoprofil');
            $fotoProfileName = uniqid() . '.' . $newFotoProfile->getClientOriginalExtension();
            $newFotoProfile->storeAs('profile/', $fotoProfileName);

            Storage::delete('profile/' . $user->fotoprofil);

                // Update kolom pofile dengan nama file yang baru
            $user->fotoprofil = $fotoProfileName;
        }
        $user->save();
        return redirect()->route('profile.index')->with('success','profile berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(profile $profile)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Film;
use App\Models\Genre;
use App\Models\Penayangan;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function welcome(){
        $commingsoons = Film::where('status','commingsoon')->inRandomOrder()->get();
        $trailer = Film::pluck('trailer');
        $trending = Penayangan::with('film')->orderBy('penonton','desc')->limit(6)->get();

        // dd($trending);
        return view('welcome',compact('commingsoons','trailer','trending'));
    }
    public function nowplaying(){
        $nowplayings = Film::where('status','nowplaying')->get();
        $genre = Genre::all();
        return view('nowplaying',compact('nowplayings','genre'));
    }

    public function comingsoon(){
        $comingsoon = Film::where('status','commingsoon')->get();
        $genre = Genre::all();
        // dd($comingsoon);
        return view('comingsoon',compact('comingsoon','genre'));
    }


}

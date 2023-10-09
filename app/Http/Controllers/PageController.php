<?php

namespace App\Http\Controllers;

use App\Models\Film;
use App\Models\Genre;
use App\Models\Penayangan;
use App\Models\Pesanan;
use App\Models\Rate;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function welcome(){
        $commingsoons = Film::where('status','commingsoon')->inRandomOrder()->get();
        $trailer = Film::pluck('trailer');
        $trending = Film::where('status','nowplaying')->orderBy('total_penonton','desc')->get()->take(6);


// dd($trending);
        return view('welcome',compact('commingsoons','trailer','trending'));
    }
    public function nowplaying(){
        $nowplayings = Film::where('status','nowplaying')->get();
        // dd($nowplayings);

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

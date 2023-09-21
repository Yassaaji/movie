<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function welcome(){
        $commingsoons = Film::where('status','commingsoon')->inRandomOrder()->take(6)->get();
        $trailer = Film::pluck('trailer');

        // dump($commingsoon);
        return view('welcome',compact('commingsoons','trailer'));
    }
    public function nowplaying(){
        $nowplayings = Film::where('status','nowplaying')->get();
        return view('nowplaying',compact('nowplayings'));
    }

    
}

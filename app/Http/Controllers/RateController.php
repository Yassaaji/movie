<?php

namespace App\Http\Controllers;

use App\Models\Film;
use App\Models\Rate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(Request $request ,$film_id)
    {

        // dd($request);
        if($request->rate > 5 || $request->rate < 0){
            return redirect()->back()->with('error',"Rating tidak valid!") ;

        }

        // dd($request);
       $rate = Rate::where('film_id',$film_id)->where('user_id',Auth::user()->id)->first();
    //    dd($rate);
        if (isset($rate)) {
            $rate->user_id = Auth::user()->id;
            $rate->film_id = $film_id;
            $rate->rate = $request->rate;
            $rate->save();
            // Rating baru dibuat
            return redirect()->back()->with('success',"Rating telah diperbarui!") ;
        } else {
            // Rating sudah ada, lakukan pembaruan
            $rate = new Rate();
            $rate->user_id = Auth::user()->id;
            $rate->film_id = $film_id;
            $rate->rate = $request->rate;
            $rate->save();
            return redirect()->back()->with('success',"Rating baru telah dibuat!") ;
            // echo "Rating telah diperbarui!";
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Rate $rate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Rate $rate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Rate $rate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Rate $rate)
    {
        //
    }
}

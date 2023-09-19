<?php

namespace App\Http\Controllers;

use App\Models\nowplaying;
use App\Http\Requests\StorenowplayingRequest;
use App\Http\Requests\UpdatenowplayingRequest;

class NowplayingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('nowplaying');
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
    public function store(StorenowplayingRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(nowplaying $nowplaying)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(nowplaying $nowplaying)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatenowplayingRequest $request, nowplaying $nowplaying)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(nowplaying $nowplaying)
    {
        //
    }
}

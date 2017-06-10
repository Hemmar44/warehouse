<?php

namespace App\Http\Controllers;

use App\Wares;
use Illuminate\Http\Request;

class WaresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Wares::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Wares  $wares
     * @return \Illuminate\Http\Response
     */
    public function show(Wares $wares)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Wares  $wares
     * @return \Illuminate\Http\Response
     */
    public function edit(Wares $wares)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Wares  $wares
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Wares $wares)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Wares  $wares
     * @return \Illuminate\Http\Response
     */
    public function destroy(Wares $wares)
    {
        //
    }
}

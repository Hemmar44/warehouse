<?php

namespace App\Http\Controllers;

use App\Ware;
use Illuminate\Http\Request;

class WareController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Ware::all();
    }

    public function all(Request $request) {

        return $request->path();

        $wares = Ware::paginate(15);

        return view('/public/products', compact('wares'));
    
    }

    public function products(Request $request) {

        $uri = $request->path();

        if ($uri === 'polecane') {

        $wares = Ware::where('recommended', 1)->paginate(6);

        }

        else if ($uri === 'nowosci') {

        $wares = Ware::where('new', 1)->paginate(6);

        }

        else if ($uri === 'promocje') {

        $wares = Ware::where('promo', 1)->paginate(6);

        }

        

        return view('/public/show', compact('wares'));
    
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

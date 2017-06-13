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

        $header = $this->setHeader('Polecamy nasze najbardziej popularne produkty');

        $wares = Ware::where('recommended', 1)->paginate(6);

        }

        else if ($uri === 'nowosci') {

        $header = $this->setHeader('Nasze nowości');

        $wares = Ware::where('new', 1)->paginate(6);

        }

        else if ($uri === 'promocje') {

        $header = $this->setHeader('W tym miesiącu w najniższych cenach');

        $wares = Ware::where('promo', 1)->paginate(6);

        }

        

        return view('/public/show', compact('wares', 'header'));
    
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
    public function show(Ware $ware)
    {   
        
        $message = $this->checkForSpecialOffer($ware);

        return view('/public/single', compact('ware', 'message'));
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

     public function setHeader($message) {

           return $header = $message;

    }

    public function checkForSpecialOffer($ware) {

        if ($ware->new) {

            return 'Nowość';
        
        }

        if ($ware->recommended) {

            return 'Polecamy';
        }

        if ($ware->promo) {

            return 'Promocja';
        }

        return '';
    }
}

<?php

namespace App\Http\Controllers;

use App\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    
    public function brands(Request $request) {

        $brands = Brand::all();

        return view('/public.products', compact('brands'));

    }

   
}

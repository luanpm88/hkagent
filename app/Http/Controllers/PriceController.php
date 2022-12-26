<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PriceController extends Controller
{
    public function seller(Request $request)
    {
        return view('prices.seller');
    }
}

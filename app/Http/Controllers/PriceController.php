<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sheets;

class PriceController extends Controller
{
    public function seller(Request $request)
    {
        $values = Sheets::spreadsheet('1cIJS9cyCzG-YnD2pPSmmwANmB2wmVVpTGOZ6sT_9DMg')->sheet('Bảng Giá đại lý')->all();
        // dd($values);

        return view('prices.seller', [
            'values' => $values,
        ]);
    }

    public function customer(Request $request)
    {
        $values = Sheets::spreadsheet('1t-yIOPYhb1WfpiNbAv4ww_otnospOzKaYaX4C5E6J2g')->sheet('Bảng Giá bán Lẻ')->all();
        // dd($values);

        return view('prices.customer', [
            'values' => $values,
        ]);
    }
}

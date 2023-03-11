<?php

namespace App\Http\Controllers;
use App\Models\Phone;

use Illuminate\Http\Request;

class ConfiguratorController extends Controller
{
    public function index()
    {
        //getting the highest and lowest price for the price slider
        $highestPrice = Phone::orderBy('price', 'desc')->first()->price;
        $lowestPrice = Phone::orderBy('price', 'asc')->first()->price;

        return view('pages.configurator.index')->with([
            'highestPrice' => $highestPrice,
            'lowestPrice' => $lowestPrice,
        ]);
    }
}

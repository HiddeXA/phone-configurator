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

        $highestScreen = Phone::orderBy('screen', 'desc')->first()->screen;
        $lowestScreen = Phone::orderBy('screen', 'asc')->first()->screen;

        return view('pages.configurator.index')->with([
            'highestPrice' => $highestPrice,
            'lowestPrice' => $lowestPrice,
            'highestScreen' => $highestScreen,
            'lowestScreen' => $lowestScreen,
        ]);
    }

    public function calculate(Request $request)
    {

        $phone = Phone::where('price', '>=', $request->minPrice)->where('price', '<', $request->maxPrice)->where('screen', '>=', $request->minScreen)->where('screen', '<', $request->maxScreen)->orderBy('battery_capacity', 'desc');

        if ($request->operatingSystem != 'noChoice') {
            $phone->where('operating_system', $request->operatingSystem);
        }

        if ($request->camera != 'noChoice') {
            $phone->orderBy('rear_camera','desc');
        }

        return response()->json($phone->limit(10)->get());

    }
}

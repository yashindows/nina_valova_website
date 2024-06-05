<?php

namespace App\Http\Controllers;

use App\Models\MainPageAsset;
use App\Models\Master;
use App\Models\Procedure;
use App\Models\ServiceWork;
use App\Models\Sold;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about()
    {
        $assets = MainPageAsset::all();
        $procedures = Procedure::all();
        $masters = Master::all();
        $sold = Sold::all();
        $services = ServiceWork::all();
        $combObj = [$sold, $procedures];


        return view('about', compact('procedures', 'masters', 'assets', 'sold', 'services', 'combObj'));
    }
}

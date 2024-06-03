<?php

namespace App\Http\Controllers;

use App\Models\MainPageAsset;
use App\Models\Master;
use App\Models\Procedure;
use App\Models\ServiceWork;
use App\Models\Sold;
use Illuminate\Http\Request;

class MainPageController extends Controller
{
    public function index()
    {
        $assets = MainPageAsset::all();
        $procedures = Procedure::all();
        $masters = Master::all();
        $services = ServiceWork::all();
        $sold = Sold::all();
        $combObj = [$sold, $procedures];

        return view('main', compact('assets', 'procedures', 'masters', 'services', 'sold', 'combObj'));
    }
}

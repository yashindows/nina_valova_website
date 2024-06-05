<?php

namespace App\Http\Controllers;

use App\Models\MainPageAsset;
use App\Models\Master;
use App\Models\PortfolioWork;
use App\Models\Procedure;
use App\Models\ServiceWork;
use App\Models\Sold;
use Illuminate\Http\Request;

class GridController extends Controller
{
    public function services()
    { // параметры сюда
        $assets = MainPageAsset::all();
        $works = ServiceWork::all();
        $procedures = Procedure::all();
        $masters = Master::all();
        $sold = Sold::all();
        $services = $works;
        $combObj = [$sold, $procedures];


        return view('services', compact('works', 'procedures', 'masters', 'assets', 'services', 'sold', 'combObj'));
    }
    public function portfolio()
    { // параметры сюда
        $assets = MainPageAsset::all();
        $works = PortfolioWork::all();
        $procedures = Procedure::all();
        $masters = Master::all();
        $services = ServiceWork::all();
        $sold = Sold::all();
        $combObj = [$sold, $procedures];



        return view('portfolio', compact('works', 'procedures', 'masters', 'assets', 'services', 'sold', 'combObj'));
    }
}

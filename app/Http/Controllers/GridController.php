<?php

namespace App\Http\Controllers;

use App\Models\MainPageAsset;
use App\Models\Master;
use App\Models\PortfolioWork;
use App\Models\Procedure;
use App\Models\ServiceWork;
use Illuminate\Http\Request;

class GridController extends Controller
{
    public function services()
    { // параметры сюда
        $assets = MainPageAsset::all();
        $works = ServiceWork::all();
        $procedures = Procedure::all();
        $masters = Master::all();
        $services = $works;


        return view('services', compact('works', 'procedures', 'masters', 'assets', 'services'));
    }
    public function portfolio()
    { // параметры сюда
        $assets = MainPageAsset::all();
        $works = PortfolioWork::all();
        $procedures = Procedure::all();
        $masters = Master::all();
        $services = ServiceWork::all();


        return view('portfolio', compact('works', 'procedures', 'masters', 'assets', 'services'));
    }
}

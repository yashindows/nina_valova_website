<?php

namespace App\Http\Controllers;

use App\Models\Master;
use App\Models\PortfolioWork;
use App\Models\Procedure;
use App\Models\ServiceWork;
use Illuminate\Http\Request;

class GridController extends Controller
{
    public function services()
    { // параметры сюда
        $works = ServiceWork::all();
        $procedures = Procedure::all();
        $masters = Master::all();


        return view('services', compact('works', 'procedures', 'masters'));
    }
    public function portfolio()
    { // параметры сюда
        $works = PortfolioWork::all();
        $procedures = Procedure::all();
        $masters = Master::all();


        return view('portfolio', compact('works', 'procedures', 'masters'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\PortfolioWork;
use App\Models\ServiceWork;
use Illuminate\Http\Request;

class GridController extends Controller
{
    public function services()
    { // параметры сюда
        $works = ServiceWork::all();

        return view('services', compact('works'));
    }
    public function portfolio()
    { // параметры сюда
        $works = PortfolioWork::all();

        return view('portfolio', compact('works'));
    }
}

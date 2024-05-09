<?php

namespace App\Http\Controllers;

use App\Models\MainPageAsset;
use App\Models\Master;
use App\Models\Procedure;
use Illuminate\Http\Request;

class MainPageController extends Controller
{
    public function index()
    {
        $assets = MainPageAsset::all();
        $procedures = Procedure::all();
        $masters = Master::all();

        return view('main', compact('assets', 'procedures', 'masters'));
    }
}

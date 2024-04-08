<?php

namespace App\Http\Controllers;

use App\Models\MainPageAsset;
use Illuminate\Http\Request;

class MainPageController extends Controller
{
    public function index()
    {
        $assets = MainPageAsset::all();

        return view('main', compact('assets'));
    }
}

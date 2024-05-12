<?php

namespace App\Http\Controllers;

use App\Models\Document;
use App\Models\MainPageAsset;
use Illuminate\Http\Request;

class GuideController extends Controller
{
    public function index()
    {
        $assets = MainPageAsset::all();
        $documents = Document::all();
        return view('guide', compact('assets', 'documents'));
    }
}

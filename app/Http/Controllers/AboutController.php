<?php

namespace App\Http\Controllers;

use App\Models\Master;
use App\Models\Procedure;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about()
    {
        $procedures = Procedure::all();
        $masters = Master::all();

        return view('about', compact('procedures', 'masters'));
    }
}

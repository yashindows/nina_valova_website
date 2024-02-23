<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GridController extends Controller
{
    public function index(){ // параметры сюда
        return view('portfolio');
    }
}

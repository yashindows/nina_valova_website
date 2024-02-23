<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyPlaceController extends Controller
{
    public function index() {
        return view('main');
    }
    public function grid() {
        return view('grid');
    }
    public function about() {
        return view('about');
    }
}

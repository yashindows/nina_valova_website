<?php

namespace App\Http\Controllers;

use App\Models\MainPageAsset;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function index()
    {
        $assets = MainPageAsset::all();
        return view('contacts', compact('assets'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\MainPageAsset;
use App\Models\Order;
use App\Models\PortfolioWork;
use App\Models\Procedure;
use App\Models\ServiceWork;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $orders = Order::all();
        $services = ServiceWork::all();
        $portfolio = PortfolioWork::all();
        $assets = MainPageAsset::all();
        $procedures = Procedure::all();


        return view('admin', compact('orders', 'services', 'portfolio', 'assets', 'procedures'));
    }
}

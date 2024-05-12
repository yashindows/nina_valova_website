<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\PortfolioWork;
use App\Models\ServiceWork;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function editFormService(ServiceWork $service)
    {
        $service::all();
        return view('editService', compact('service'));
    }

    public function editFormPortfolio(PortfolioWork $item)
    {
        $item::all();
        return view('editPortfolio', compact('item'));
    }

    public function updateService(ServiceWork $service, Request $request)
    {

        $data = $request->validate([
            'work_title' => 'required|string|max:255',
            'description' => 'required',
            'price' => 'required',
            'duration' => 'required',

        ]);

        $service->update($data);


        return redirect()->route('home');
    }

    public function updatePortfolio(PortfolioWork $item, Request $request)
    {

        $data = $request->validate([
            'title' => 'required|string|max:255',

        ]);

        $item->update($data);


        return redirect()->route('home');
    }

    public function updateServiceImage(Request $request, $id)
    {
        $item = ServiceWork::find($id);

        if ($request->hasFile('work_img')) {
            $image = $request->file('work_img');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('img/services'), $imageName);

            $item->work_img = $imageName;
            $item->save();
        }

        return redirect()->route('home');
    }

    public function updatePortfolioImage(Request $request, $id)
    {
        $item = PortfolioWork::find($id);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('img/portfolio'), $imageName);

            $item->image = $imageName;
            $item->save();
        }

        return redirect()->route('home');
    }

    public function destroyService(ServiceWork $service)
    {
        $service->delete();
        return redirect()->route('home');
    }

    public function destroyPortfolioWork(PortfolioWork $item)
    {
        $item->delete();
        return redirect()->route('home');
    }

    public function destroyOrder(Order $order)
    {
        $order->delete();
        return redirect()->route('home');
    }
}

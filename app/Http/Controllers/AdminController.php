<?php

namespace App\Http\Controllers;

use App\Models\Document;
use App\Models\MainPageAsset;
use App\Models\Order;
use App\Models\PortfolioWork;
use App\Models\Procedure;
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
            'title' => 'nullable|string|max:255',
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

    public function destroyProcedure(Procedure $procedure)
    {
        $procedure->delete();
        return redirect()->route('home');
    }

    public function updateTitle(MainPageAsset $asset, Request $request)
    {
        $data = $request->validate([
            'title' => 'required'
        ]);
        $asset->update($data);
        return redirect()->route('home');
    }

    public function updateLogo(Request $request, $id)
    {
        $item = MainPageAsset::find($id);

        if ($request->hasFile('logo')) {
            $image = $request->file('logo');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('/'), $imageName);

            $item->logo = $imageName;
            $item->save();
        }

        return redirect()->route('home');
    }

    public function updateMainImg(Request $request, $id)
    {
        $item = MainPageAsset::find($id);

        if ($request->hasFile('main_image')) {
            $image = $request->file('main_image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('/img'), $imageName);

            $item->main_image = $imageName;
            $item->save();
        }

        return redirect()->route('home');
    }

    public function updateContactsInfo(MainPageAsset $asset, Request $request)
    {
        $data = $request->validate([
            'city' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'email' => 'required'
        ]);
        $asset->update($data);
        return redirect()->route('home');
    }

    public function createService(Request $request)
    {
        $service = new ServiceWork();
        $service->work_title = $request->work_title;
        $service->description = $request->description;
        $service->price = $request->price;
        $service->duration = $request->duration;

        if ($request->hasFile('work_img')) {
            $image = $request->file('work_img');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('img/services'), $imageName);
            $service->work_img = $imageName;
        }

        $service->save();

        return redirect('/admin');
    }

    public function createPortfolioWork(Request $request)
    {
        $portfolio_work = new PortfolioWork();
        $portfolio_work->title = $request->work_title;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('img/portfolio'), $imageName);
            $portfolio_work->image = $imageName;
        }

        $portfolio_work->save();

        return redirect('/admin');
    }

    public function createOrderTime(Request $request)
    {
        $order_data = new Procedure();
        $order_data->procedure_day = $request->procedure_day;
        $order_data->procedure_time = $request->procedure_time;

        $order_data->save();

        return redirect('/admin');
    }

    public function uploadPDF(Request $request)
    {
        $file = $request->file('pdf_file');
        $filePath = $file->store('pdf_files');

        $document = new Document();
        $document->file_path = $filePath;
        $document->save();

        return redirect()->back();
    }
}

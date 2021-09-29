<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateModel;
use App\Http\Requests\EditModel;
use App\Models\brands;
use App\Models\vehicle_model;
use App\Models\vehicle_types;
use Illuminate\Http\Request;

class VehicleModelController extends Controller
{
    public function index()
    {
        $models = vehicle_model::with('Type', 'Brand')->get()->toArray();

        return view('Models.index', compact(['models']));
    }

    public function create()
    {
        $vehicles = vehicle_types::all();
        $brands = brands::all();

        return view('Models.create', compact('vehicles', 'brands'));
    }

    public function store(CreateModel $request)
    {
        vehicle_model::create($request->validated());

        return back()->with('success', 'Vehicle Models Have Been added Successfully');
    }

    public function edit($id)
    {
        $model = vehicle_model::find($id)->first();
        $vehicles = vehicle_types::all();
        $brands = brands::all();

        return view('Models.edit', compact('model','vehicles', 'brands'));
    }

    public function update(EditModel $request, $id)
    {
        vehicle_model::where('id', $id)->update($request->validated());

        return redirect()->route('Models.index')->with('success', 'Vehicle Model Have Been Updated Successfully');
    }

    public function destroy($id)
    {
        vehicle_model::find($id)->delete();

        return back();
    }

}

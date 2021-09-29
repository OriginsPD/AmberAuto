<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateType;
use App\Http\Requests\EditType;
use App\Models\brands;
use App\Models\vehicle_types;
use Illuminate\Http\Request;

class VehicleTypesController extends Controller
{
    public function index()
    {
        $types = vehicle_types::all()->toArray();

        return view('Types.index',compact('types'));
    }

    public function create()
    {
        return view('Types.create');
    }

    public function store(CreateType $request)
    {

        vehicle_types::create($request->validated());

        return back()->with('success', 'Vehicle Type Has Been added Successfully');
    }

    public function edit($id)
    {
        $type = vehicle_types::find($id)->first();

        return view('Types.edit',compact('type'));
    }

    public function update(EditType $request,$id)
    {
        vehicle_types::where('id',$id)->update($request->validated());

        return redirect()->route('Type.index')->with('success', 'Vehicle Type Have Been Update Successfully');
    }

    public function destroy($id)
    {
        vehicle_types::find($id)->delete();

        return back();
    }


}

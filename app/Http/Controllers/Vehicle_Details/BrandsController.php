<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateBrand;
use App\Http\Requests\EditBrand;
use App\Models\brands;
use Illuminate\Http\Request;

class BrandsController extends Controller
{
    public function index()
    {
        $brands = brands::all();
        return view('Brands.index', compact('brands'));
    }

    public function create()
    {
        return view('Brands.create');
    }

    public function store(CreateBrand $request)
    {

        brands::create([
            'brand_nm' => $request->input('brand_nm'),
            'brand_desc' => $request->input('brand_desc'),
        ]);

        return back()->with('success', 'Brands Have Been added Successfully');
    }

    public function edit($id)
    {
        $brand = brands::find($id)->first();

        return view('Brands.edit', compact('brand'));
    }

    public function update(EditBrand $request,$id)
    {
        brands::where('id',$id)->update($request->validated());

        return redirect()->route('Brands.index')->with('success', 'Brands Have Been Updated Successfully');
    }

    public function destroy($id)
    {
        brands::find($id)->delete();

        return back();
    }
}

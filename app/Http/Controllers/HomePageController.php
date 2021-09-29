<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\vehicle_model;

class HomePageController extends Controller
{
    public function index()
    {
        $models = vehicle_model::with('Type','Brand')->get()->toArray();
       
        return view('Home.index',compact('models'));
    }
}

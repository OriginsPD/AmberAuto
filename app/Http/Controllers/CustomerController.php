<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        return view('agent.customer.index');
    }

    public function create()
    {
        return view('agent.customer.create');
    }
}

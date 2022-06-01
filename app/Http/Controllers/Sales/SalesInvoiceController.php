<?php

namespace App\Http\Controllers\Sales;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SalesInvoiceController extends Controller
{
    public function index()
    {
        return view('agent.sales.invoice.index');
    }

    public function create()
    {
        return view('agent.sales.invoice.create');
    }
}

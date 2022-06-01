<?php

namespace App\Http\Controllers\Sales;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SalesInvoiceDetailController extends Controller
{
    public function index()
    {
        return view('agent.sales.details.index');
    }
}

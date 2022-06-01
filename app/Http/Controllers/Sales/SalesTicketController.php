<?php

namespace App\Http\Controllers\Sales;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SalesTicketController extends Controller
{
    public function index()
    {
        return view('agent.sales.ticket.index');
    }
}

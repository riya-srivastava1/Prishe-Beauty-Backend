<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use App\Models\OrderDetail;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function index()
    {
        $totalOrders = OrderDetail::count();
        $totalContacts = ContactUs::count();
        return view('pages.dashboard',compact('totalOrders','totalContacts'));
    }
}

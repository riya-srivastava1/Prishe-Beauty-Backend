<?php

namespace App\Http\Controllers;

use App\Models\OrderDetail;
use Illuminate\Http\Request;
use App\Models\CustomerDetail;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\OrdersExport;

class CustomerDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // products
        $customer_details = OrderDetail::orderByDesc('created_at')->get();
        // foreach ($customer_details as $key => $value) {
        //     return $value->products;
        // }
       
        return view('pages.orders', compact('customer_details'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->only(['name', 'address', 'email', 'phone_no']);
        CustomerDetail::create($data);
    }
 
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function exportOrders(){
        return Excel::download(new OrdersExport(), 'Order-data.xlsx');
    }
}

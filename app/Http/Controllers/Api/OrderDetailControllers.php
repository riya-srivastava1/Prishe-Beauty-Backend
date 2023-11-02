<?php

namespace App\Http\Controllers\Api;

use App\Models\OrderDetail;
use App\Mail\OrderPlaceMail;
use Illuminate\Http\Request;
use App\Exports\OrdersExport;
use App\Models\CustomerDetail;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
class OrderDetailControllers extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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

        // $order = json_encode($request->product);
        // $request['order'] = $order;
        try {

            DB::beginTransaction();
            
            $order = new OrderDetail();
            $order->name = $request->name;
            $order->email = $request->email;
            $order->phone_no = $request->phone_no;
            $order->address = json_encode($request->address);
            $order->order_details = json_encode($request->items);
            $order->save();

            // $request['customer_id'] = $customer_detail->id;
        
            // in title concatinate Product name and variant name
            // $data = $request->only(['customer_id', 'title', 'quantity']);
            // $order_detail = OrderDetail::create($data);
            //ecomm@prishebeauty.com
            Mail::to('ecomm@prishebeauty.com')->send(new OrderPlaceMail());
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollback();
            // return $th->getMessage();
            return response()->json([
                'status' => false,
                'msg'    => 'Order not placed',
                'error'  => $th->getMessage()
            ], 200);
        }

        return response()->json([
            'status' => true,
            'msg'    => 'Order Successfully placed',
            'error'  => '',
        ], 200);
    
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
}

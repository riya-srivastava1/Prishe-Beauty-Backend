<?php

namespace App\Exports;

use App\Models\OrderDetail;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class OrdersExport implements FromCollection, WithHeadings, WithStyles
{
    /**
     * @return \Illuminate\Support\Collection
     */


     public function collection()
{
    $orders = OrderDetail::select(['name', 'email', 'phone_no', 'address', 'order_details', 'created_at'])->get();

    $formattedOrders = $orders->map(function ($order) {
        $addressData = json_decode($order->address, true);

        // Format address data using null coalescing operator
        $formattedAddress = implode(', ', array_filter([
            $addressData['address1'] ?? '',
            $addressData['city'] ?? '',
            $addressData['province'] ?? '',
            $addressData['zip'] ?? '',
            $addressData['country'] ?? '',
        ]));
        
        // Decode order_details if needed and optimize product processing
        $orderDetails = json_decode($order->order_details, true);
        
        // dd($orderDetails);
        $uniqueProducts = [];
        foreach ($orderDetails as $item) {
            $productQuantity = 'quantity - ' . $item['node']['quantity'];
            $variantTitle = $item['node']['variant']['title'];

            // Use associative array for unique products
            $uniqueProducts[$variantTitle][$productQuantity] = true;
        }
        // Format products using implode and array_keys
        $formattedProducts = [];
        foreach ($uniqueProducts as $productTitle => $variants) {
            if (!empty($variants)) {
                // Include only variant titles in the product string
                $formattedProduct = $productTitle . ' - ' . implode(', ', array_keys($variants));
            } else {
                // Use only the product title if there are no variants
                $formattedProduct = $productTitle;
            }

            $formattedProducts[] = $formattedProduct;
        }

        $uniqueProductsString = implode(', ', $formattedProducts);

        dd($uniqueProductsString);

        // Use $order->created_at instead of $orders['created_at']
        $date = date('d/m/Y', strtotime($order->created_at));

        return [
            'name' => $order->name,
            'email' => $order->email,
            'phone_no' => $order->phone_no,
            'address' => $formattedAddress,
            'products' => $uniqueProductsString,
            'date' => $date,
        ];
    });

    return $formattedOrders;
}
    public function headings(): array
    {
        return [
            'Name',
            'Email',
            'Contact Number',
            'Address',
            'Product',
            'Date'
        ];
    }

    public function styles(Worksheet $sheet)
    {
        return [
            1 => ['font' => ['bold' => true]],
        ];
    }
}

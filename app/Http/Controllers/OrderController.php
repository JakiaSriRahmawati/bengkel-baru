<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function cancelOrder($id)
{
    $order = order::find($id);
    
    if ($order && $order->status_servis == 'pending') {
        $order->status_servis = 'canceled'; 
        $order->save();
        
        return redirect()->back()->with('status', 'Pesanan berhasil dibatalkan.');
    }
    
    return redirect()->back()->with('error', 'Pesanan tidak dapat dibatalkan.');
}
}

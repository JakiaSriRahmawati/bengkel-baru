<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\booking;
use App\Models\detail_transaksi;
use Illuminate\Http\Request;

class KasirController extends Controller
{
    public function kasir()
    {
        $bookings = booking::with('user', 'buktiPembayaran')->get();
        $details = detail_transaksi::with('booking.user')->get();
    
        return view('kasir.kasir', compact('bookings', 'details'));
    }
    public function showInvoice()
    {
        $details = detail_transaksi::with('booking.user')->get();

        return view('kasir.invoice', compact('details'));
    }

}

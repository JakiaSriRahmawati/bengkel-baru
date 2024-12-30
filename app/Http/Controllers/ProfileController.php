<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\booking;
use App\Models\detail_transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function show()
    {
        $user = Auth::user();
        $orders = booking::where('user_id', $user->id)->get();
        $details = detail_transaksi::with('booking.user')->whereHas('booking', function($query) use ($user) {
            $query->where('user_id', $user->id);
        })->get();
        
        return view('pengguna.profil', compact('user', 'orders', 'details'));
    }
    public function showInvoice()
    {
        $details = detail_transaksi::with('booking.user')->get();

        return view('pengguna.profil', compact('details'));
    }
}

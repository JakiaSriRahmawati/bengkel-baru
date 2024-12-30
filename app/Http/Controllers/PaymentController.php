<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\booking;
use App\Models\order;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function uploadPaymentProof(Request $request, $id)
{
    $request->validate([
        'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
    ]);
    // dd($id);
    $booking = booking::findOrFail($id);
    if ($image = $request->file('gambar')) {

        $destinationPath = 'image/';

        $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();

        $image->move($destinationPath, $profileImage);

        $booking['gambar'] = "$profileImage";
        $booking->save();
    }

    return redirect()->back()->with('status', 'Bukti pembayaran berhasil diupload!');
    

    return redirect()->back()->with('error', 'Booking tidak ditemukan!');
}
public function processPayment(Request $request, $orderId) {
        $order = order::findOrFail($orderId);

        if ($order->status != 'unpaid') {
            return redirect()->route('profil')->with('error', 'Pesanan sudah dibayar.');
        }

        $order->status = 'paid';
        $order->save();

        return redirect()->route('profil')->with('status', 'Pembayaran berhasil!');
    }
    public function verifyPayment($id)
{
    $booking = Booking::findOrFail($id);

    // Set is_paid ke true dan simpan ke database
    $booking->is_paid = true;
    $booking->save();

    return redirect()->back()->with('notifikasi', 'Pembayaran telah diverifikasi.');
}
}

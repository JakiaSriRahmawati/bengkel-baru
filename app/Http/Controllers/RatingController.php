<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\booking;
use App\Models\rating;
use Illuminate\Http\Request;

class RatingController extends Controller
{
    public function create($booking_id) {
        $booking = Booking::findOrFail($booking_id);

        // Pastikan booking dimiliki oleh user yang sedang login
        if ($booking->user_id !== auth()->id()) {
            return redirect()->back()->with('error', 'Anda tidak memiliki akses.');
        }

        // Cek jika sudah ada rating
        if ($booking->rating) {
            return redirect()->back()->with('error', 'Rating sudah diberikan.');
        }

        return view('ratings.create', compact('booking'));
    }

    public function store(Request $request) {
        $request->validate([
            'booking_id' => 'required|exists:bookings,id',
            'rating'     => 'required|integer|min:1|max:5',
            'deskripsi'  => 'nullable|string|max:500',
        ]);

        $booking = booking::findOrFail($request->booking_id);

        // Cek apakah user memiliki booking ini
        if ($booking->user_id !== auth()->id()) {
            return redirect()->back()->with('error', 'Anda tidak memiliki akses.');
        }

        // Simpan rating
        rating::create([
            'user_id'    => auth()->id(),
            'booking_id' => $request->booking_id,
            'rating'     => $request->rating,
            'deskripsi'  => $request->deskripsi,
        ]);

        return redirect()->route('bookings.index')->with('success', 'Rating berhasil disimpan.');
    }
}

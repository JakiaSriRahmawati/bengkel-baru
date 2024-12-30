<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\barang;
use App\Models\booking;
use Illuminate\Http\Request;

class MekanikController extends Controller
{
    public function mekanik() 
    {
        $bookings = booking::with('user')->get();
        $parts = barang::all();
        return view('mekanik.mekanik', compact('bookings', 'parts'));
    }
    public function tambah_barang() 
    {
        return view('mekanik.tambah_barang');
    }

}

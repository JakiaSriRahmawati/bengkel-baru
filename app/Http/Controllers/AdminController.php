<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\barang;
use App\Models\booking;
use App\Models\transaksi;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function addPart(Request $request)
{
    $request->validate([
        'nama_barang' => 'required|string|max:255',
        'harga_barang' => 'required|numeric',
        'stok' => 'required|integer',
    ]);

    $part = new barang();
    $part->nama_barang = $request->nama_barang;
    $part->harga_barang = $request->harga_barang;
    $part->stok = $request->stok;
    $part->save();

    return redirect()->route('admin.homeAdmin')->with('status', 'Barang berhasil ditambahkan!');
}
public function index() {
        $users = User::where('role', 'pengguna')->get();
        $owners = User::where('role', 'owner')->get();
        $cashiers = User::where('role', 'kasir')->get();
        $mechanics = User::where('role', 'mekanik')->get();
        $bookings = booking::all();
        $transactions = transaksi::all();
        return view('admin.homeadmin', compact('users', 'owners', 'cashiers', 'mechanics', 'bookings', 'transactions'));
        
    }
}

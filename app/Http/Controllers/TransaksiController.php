<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\barang;
use App\Models\detail;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class TransaksiController extends Controller
{
    public function store(Request $request, $booking_id)
    {
        $request->validate([
            'part_id' => 'required|exists:barangs,id',
            'harga_barang' => 'required|numeric',
            'jumlah_barang' => 'required|integer|min:1',
            'biaya_jasa' => 'required|numeric',
        ]);

        $part = barang::findOrFail($request->part_id);

        if ($part->stok < $request->jumlah_barang) {
            return redirect()->back()->with('error', 'Stok barang tidak mencukupi!');
        }

        $detail = new detail();
        $detail->booking_id = $booking_id;
        $detail->invoice = Str::random(10); 
        $detail->nama_barang = $part->nama_barang;
        $detail->harga_barang = $request->harga_barang;
        $detail->jumlah_barang = $request->jumlah_barang;
        $detail->biaya_jasa = $request->biaya_jasa;
        $detail->save();

        $part->stok -= $request->jumlah_barang;
        $part->save();

        return redirect()->back()->with('status', 'Detail pesanan berhasil ditambahkan!');
    }
}

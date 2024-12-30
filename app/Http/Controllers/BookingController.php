<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\booking;
use App\Models\detail_transaksi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    public function index() {
        return view('booking');
    }
    public function indexx() {
        $bookings = Booking::with('rating')->where('user_id', auth()->id())->get();
        return view('index', compact('bookings'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'merek_motor' => 'required|string',
            'seri_motor' => 'required|string',
            'mesin_motor' => 'required|string',
            'no_plat' => 'required|string',
            'jenis_servis' => 'required|string',
            'tanggal_booking' => 'required|date',
            'deskripsi' => 'required|string',
        ]);


         // Pastikan pengguna sudah login
         if (!Auth::check()) {
            return redirect()->route('login')->withErrors('Anda harus login terlebih dahulu.');
        }

        // Simpan data ke database
        booking::create([
            'user_id' => Auth::id(), // Tambahkan user_id
            'merek_motor' => $request->input('merek_motor'),
            'seri_motor' => $request->input('seri_motor'),
            'mesin_motor' => $request->input('mesin_motor'),
            'no_plat' => $request->input('no_plat'),
            'jenis_servis' => $request->input('jenis_servis'),
            'tanggal_booking' => $request->input('tanggal_booking'),
            'deskripsi' => $request->input('deskripsi'),
        ]);

        return redirect()->back()->with('success', 'Booking berhasil!');
    }
    public function edit($id)
    {
        $booking = Booking::findOrFail($id);
        return view('editbayar', compact('booking'));
    }
    public function updateUangMasuk(Request $request, $id)
    {
        $booking = Booking::findOrFail($id);

        $request->validate([
            'uang_masuk' => 'required|numeric|min:0',
        ]);

        $booking->uang_masuk = $request->uang_masuk;
        $booking->is_paid = 1;

        if($booking->total_biaya>$request->uang_masuk){
            return redirect()->route('editbayar', $booking->id)
                            ->with('error', 'Jumlah bayar kurang dari total biaya.');
        }
        $booking->save();

        return redirect()->route('kasir', $booking->id)
                         ->with('success', 'Uang masuk berhasil diperbarui dan kembalian dihitung.');
    }
    public function updateStatus(Request $request, $bookingId)
{
    $request->validate([
        'status_servis' => 'required|in:pending,received,in_progress,completed,rejected',
    ]);

    $booking = Booking::findOrFail($bookingId);
    $booking->status_servis = $request->status_servis;
    $booking->save();

    return back()->with('status', 'Status servis berhasil diperbarui!');
}
public function destroy($id)
{
    $booking = Booking::find($id);
    
    if ($booking) {
        // Hapus booking dari database
        $booking->delete();
        
        return redirect()->back()->with('status', 'Pesanan berhasil dihapus.');
    }
    
    return redirect()->back()->with('error', 'Pesanan tidak ditemukan.');
}
protected $fillable = [
    'user_id',
    'merek_motor',
    'seri_motor',
    'mesin_motor',
    'no_plat',
    'jenis_servis',
    'tanggal_booking',
    'deskripsi',
    'status_servis',
    'payment_proof',
    'is_paid'
];
public function user()
{
    return $this->belongsTo(User::class);
}

public function details()
{
    return $this->hasMany(detail_transaksi::class, 'booking_id');
}
}

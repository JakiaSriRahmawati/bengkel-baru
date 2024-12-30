<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AllController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\KasirController;
use App\Http\Controllers\MekanikController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [AllController::class, 'home'])->name('home');
Route::get('login', [AllController::class, 'login'])->name('login');
Route::post('postlogin', [AllController::class, 'postlogin'])->name('postlogin');
Route::get('logout', [AllController::class, 'logout'])->name('logout');
Route::get('/about', [AllController::class, 'about'])->name('about');
Route::get('/contact', [AllController::class, 'contact'])->name('contact');
Route::get('/artikel', [AllController::class, 'artikel'])->name('artikel');
Route::get('/galery', [AllController::class, 'galery'])->name('galery');
Route::get('/detail_artikel', [AllController::class, 'detail_artikel'])->name('detail_artikel');
Route::get('/layanan', [AllController::class, 'layanan'])->name('layanan');
Route::get('/register', [AllController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AllController::class, 'register']);

Route::middleware(['auth', 'role:pengguna'])->group(function () 
{
    Route::get('homepengguna', [UserController::class, 'homepengguna'])->name('homepengguna');
    Route::get('booking', [BookingController::class, 'index'])->name('booking');
    Route::post('/booking', [BookingController::class, 'store'])->name('booking.store');
    Route::get('profile', [ProfileController::class, 'show'])->name('profile');
    Route::delete('/order/{id}/cancel', [OrderController::class, 'cancelOrder'])->name('cancelOrder');
    Route::get('/invoice', [ProfileController::class, 'showInvoice'])->name('profil.invoice');
    Route::post('/upload-payment-proof/{id}', [PaymentController::class, 'uploadPaymentProof'])->name('uploadPaymentProof'); 
});
Route::get('/booking/{id}/edit', [BookingController::class, 'edit'])->name('editbayar');
Route::put('/booking/{id}/update', [BookingController::class, 'updateUangMasuk'])->name('booking.update');
Route::middleware(['auth', 'role:mekanik'])->group(function () 
{
    Route::get('mekanik', [MekanikController::class, 'mekanik'])->name('mekanik');
    Route::get('tambah_barang', [MekanikController::class, 'tambah_barang'])->name('tambah_barang');
    Route::post('/payment/{orderId}', [PaymentController::class, 'processPayment'])->name('payment');
    Route::post('/update-status/{bookingId}', [BookingController::class, 'updateStatus'])->name('updateStatus');
    Route::delete('/deleteBooking/{id}', [BookingController::class, 'destroy'])->name('deleteBooking');
    Route::post('/mekanik/add-part', [AdminController::class, 'addPart'])->name('addPart');
    Route::post('/detail_transaksi/{id}', [TransaksiController::class, 'store'])->name('detail_transaksi.store');
});
Route::middleware(['auth', 'role:kasir'])->group(function () 
{
    Route::get('/kasir', [KasirController::class, 'kasir'])->name('kasir');
    // Route::post('/payment/{order}', [PaymentController::class, 'store'])->name('payment.store');
    // Route::post('/update-status/{id}', [KasirController::class, 'updateStatus'])->name('updateStatus.post');
    Route::post('/verify-payment/{id}', [PaymentController::class, 'verifyPayment'])->name('verifyPayment');
    Route::get('/kasir/invoice', [KasirController::class, 'showInvoice'])->name('kasir.invoice');
});
Route::middleware(['auth', 'role:owner'])->group(function () 
{
    Route::get('owner', [OwnerController::class, 'owner'])->name('owner');
});
Route::middleware(['auth', 'role:admin'])->group(function () 
{
    Route::get('homeadmin', [AdminController::class, 'index'])->name('homeadmin');
});
Route::middleware('auth')->group(function () {
    Route::get('/ratings/create/{booking_id}', [RatingController::class, 'create'])->name('ratings.create');
    Route::post('/ratings', [RatingController::class, 'store'])->name('ratings.store');
});
Route::middleware('auth')->group(function () {
    Route::get('/bookings', [BookingController::class, 'indexx'])->name('bookings.index');
});
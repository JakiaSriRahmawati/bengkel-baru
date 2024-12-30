<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\booking;
use App\Models\transaksi;
use App\Models\User;
use Illuminate\Http\Request;

class OwnerController extends Controller
{
    public function owner() {
        $users = User::all();
        $owners = User::where('role', 'owner')->get();
        $cashiers = User::where('role', 'kasir')->get();
        $mechanics = User::where('role', 'mekanik')->get();
        $bookings = booking::all();
        $transactions = transaksi::all();

        $ownerData = $this->getOwnerServiceData();

        return view('owner.owner', compact('users', 'owners', 'cashiers', 'mechanics', 'bookings', 'transactions', 'ownerData'));
    }
}

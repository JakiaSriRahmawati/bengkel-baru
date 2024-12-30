<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AllController extends Controller
{
    public function home() {
        return view('home');
    }
    public function login() {
        return view('login');
    }
    public function postlogin(Request $request) {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($request->only(['email', 'password']))) {
            $user = Auth::user();
            $role = $user->role;

            switch ($role) {
                case 'admin':
                    return redirect()->route('homeadmin')->with('notifikasi', 'Selamat datang: ' . $user->nama);
                case 'pengguna':
                    return redirect()->route('homepengguna')->with('notifikasi', 'Selamat datang: ' . $user->nama);
                case 'owner':
                    return redirect()->route('owner')->with('notifikasi', 'Selamat datang: ' . $user->nama);
                case 'mekanik':
                    return redirect()->route('mekanik')->with('notifikasi', 'Selamat datang: ' . $user->nama);
                case 'kasir':
                    return redirect()->route('kasir')->with('notifikasi', 'Selamat datang: ' . $user->nama);
                default:
                    return redirect()->route('login')->with('status', 'Peran tidak dikenali');
            }
        }

        return redirect()->route('login')->with('status', 'Email atau password salah');
    }
    public function logout() {
        auth()->logout();
        return redirect()->route('login');
    }
    public function about()
    {
        return view('about');
    }
    public function artikel()
    {
        return view('artikel');
    }
    public function contact()
    {
        return view('contact');
    }
    public function layanan()
    {
        return view('layanan');
    }
    public function galery()
    {
        return view('galery');
    }
    public function showRegisterForm()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'role' => 'required|string'
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role
        ]);

        Auth::login($user);

        return redirect()->route('home')->with('status', 'Registration successful!');
    }
}

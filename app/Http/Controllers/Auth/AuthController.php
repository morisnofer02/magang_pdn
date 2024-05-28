<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(){
        return view('auth/login');
    }

    public function daftar(){
        return view('auth/register');
    }

    public function LoginPost(LoginRequest $r)
    {
    // Validasi permintaan terlebih dahulu
    if ($r->validated()) {
        // Cek apakah email ada di database
        $user = \App\Models\User::where('email', $r->email)->first();

        if (!$user) {
            // Jika email tidak ditemukan, kembalikan pesan "Email belum terdaftar"
            return back()->with('pesan', 'Email belum terdaftar');
        }

        // Coba autentikasi dengan email dan password
        if (Auth::guard('web')->attempt(['email' => $r->email, 'password' => $r->password])) {
            // Jika berhasil, redirect ke halaman home dengan pesan sukses
            return redirect('/')->with('pesan', 'Anda Berhasil Login');
        } else {
            // Jika email ditemukan tetapi password salah, kembalikan pesan "Email / Password salah"
            return back()->with('pesan', 'Email / Password salah');
        }
    }
}


    public function register(RegisterRequest $r){
        if ($r->validated()) {
            User::create([
                'name' => $r->name,
                'email' => $r->email,
                'password' => Hash::make($r->password)
            ]);
            return redirect('login')->with('pesan', 'Registrasi berhasil');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect('/')->with('pesan', 'Anda berhasil logout');
    }
}

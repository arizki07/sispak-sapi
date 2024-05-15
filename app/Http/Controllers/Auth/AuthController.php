<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        return view('pages.auth.login', [
            'judul' => 'Halaman Login | Sipak-Sapi',
        ]);
    }

    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ], [
            'email.required' => 'Email tidak boleh kosong',
            'email.email' => 'Format email tidak valid',
            'password.required' => 'Password tidak boleh kosong',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Jika login berhasil, kirimkan URL dashboard
            return route('dashboard');
        } else {
            // Jika login gagal, kirimkan pesan error
            return response()->json('Email atau password salah. Silakan coba lagi.', 422);
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}

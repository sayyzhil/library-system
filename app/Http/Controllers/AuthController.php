<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Menampilkan form login
    public function showLogin()
    {
        return view('auth.login');
    }

    // Memproses data form login
    public function login(Request $request)
{
    $credentials = $request->validate([
        'email' => 'required|email',
        'password' => 'required|string',
    ]);

    // PASTIKAN BARIS INI BENAR (Jangan sampai ada tanda seru "!" di depan Auth)
    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();
        // Arahkan ke dashboard jika berhasil
        return redirect()->intended('/dashboard'); 
    }

    // Jika salah, wajib dilempar kembali (back) ke halaman login
    return back()->withErrors([
        'email' => 'Email atau password tidak sesuai.',
    ])->onlyInput('email');
}

    // Memproses logout
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }
}
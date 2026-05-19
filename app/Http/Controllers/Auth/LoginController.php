<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
   public function showLoginForm()
    {
        return view('auth.login');
    }

    /**
     * Proses autentikasi
     */
    public function login(Request $request)
    {
        // 1. Validasi Input
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // 2. Mencoba Login (Attempt)
        $credentials = $request->only('email', 'password');
        $remember = $request->has('remember');

        if (Auth::attempt($credentials, $remember)) {
            // Jika sukses, buat ulang session untuk keamanan
            $request->session()->regenerate();

            // Cek role: Jika admin, arahkan ke dashboard/halaman tertentu
            if (auth()->user()->role === 'admin') {
                return redirect()->intended('/')
                    ->with('success', 'Selamat datang Admin, ' . auth()->user()->name);
            }

            // Jika user biasa
            return redirect()->intended('/');
        }

        // 3. Jika gagal, kembalikan ke login dengan pesan error
        throw ValidationException::withMessages([
            'email' => [trans('auth.failed')],
        ]);
    }

    /**
     * Proses Keluar (Logout)
     */
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('success', 'Anda telah berhasil keluar.');
    }
}

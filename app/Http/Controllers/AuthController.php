<?php

namespace App\Http\Controllers;

use Auth;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function masuk()
    {
        return view('sign-in');
    }

    public function masukdashboard(Request $request)
    {

        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            // Jika autentikasi berhasil
            return redirect()->intended('/dashboard');
        } else {
            // Jika autentikasi gagal
            return back()->withErrors(['email' => 'Email atau password salah.']);
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/masuk');
    }
}

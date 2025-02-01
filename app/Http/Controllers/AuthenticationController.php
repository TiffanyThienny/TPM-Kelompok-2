<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Cookie;

class AuthenticationController extends Controller
{
    // Menampilkan halaman register
    public function getRegister()
    {
        return view('register');
    }

    // Proses register
    public function register(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'team_name' => 'required|string|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Membuat user baru
        User::create([
            'name' => $request->name,
            'team_name' => $request->team_name,
            'password' => Hash::make($request->password),
        ]);

        // Redirect ke halaman home
        return redirect('/')->with('success', 'Registration successful!');
    }

    // Menampilkan halaman login
    public function getLogin()
    {
        return view('login');
    }

    // Proses login
    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'team_name' => 'required|string',
            'password' => 'required|string',
        ]);

        // Coba melakukan login
        $credentials = [
            'team_name' => $request->team_name,
            'password' => $request->password,
        ];

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            Cookie::queue('team_name', Auth::user()->team_name);
            Log::info(Auth::user()->team_name . ' is logged in.');
            return redirect('/')->with('success', 'Login successful!');
        }

        // Jika login gagal
        return back()->withErrors([
            'team_name' => 'The provided credentials do not match our records.',
        ])->onlyInput('team_name');
    }

    // Proses logout
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        Cookie::expire('team_name');
        return redirect('/')->with('success', 'Logout successful!');
    }
}
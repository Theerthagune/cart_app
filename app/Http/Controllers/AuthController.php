<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    // Handle Registration
    public function register(Request $request)
    {
        $request->validate([
            'user_name' => 'required|string|max:255',
            'user_email' => 'required|email|unique:users,user_email',
            'user_number' => 'required|string|max:15',
            'password' => 'required|string|min:8',
        ]);

        User::create([
            'user_name' => $request->user_name,
            'user_email' => $request->user_email,
            'user_number' => $request->user_number,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('login')->with('success', 'Account created successfully. Please log in.');
    }

    // Handle Login
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email_or_phone' => 'required|string',
            'password' => 'required|string',
        ]);

        $field = filter_var($credentials['email_or_phone'], FILTER_VALIDATE_EMAIL) ? 'user_email' : 'user_number';

        if (Auth::attempt([$field => $credentials['email_or_phone'], 'password' => $credentials['password']])) {
            $request->session()->regenerate();

            return redirect()->intended('/')->with('success', 'Logged in successfully!');
        }

        return back()->withErrors([
            'email_or_phone' => 'The provided credentials do not match our records.',
        ]);
    }


    // Handle Logout
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('success', 'Logged out successfully!');
    }
}


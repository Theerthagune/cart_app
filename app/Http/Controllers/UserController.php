<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    // Show the form for user registration (if needed)
    public function showForm()
    {
        return view('user.create');
    }

    // Handle form submission and save user data
    public function store(Request $request)
    {
        // Validate the input data
        $validatedData = $request->validate([
            'user_name' => 'required|string|max:255',
            'user_email' => 'required|string|email|max:255|unique:users,user_email',
            'user_number' => 'required|string|max:15',
            'password' => 'required|string|min:8',
        ]);

        // Save the data to the database
        $user = User::create([
            'user_name' => $validatedData['user_name'],
            'user_email' => $validatedData['user_email'],
            'user_number' => $validatedData['user_number'],
            'password' => bcrypt($validatedData['password']), // Encrypt the password
        ]);

        // Redirect back to the form with a success message
        return redirect()->route('user.create')->with('success', 'User registered successfully!');
    }
}

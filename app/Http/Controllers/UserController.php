<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller

{
     public function store(Request $request)
    {
        // 1. Validation
        $validated = $request->validate([
            'name'     => ['required', 'string', 'max:255'],
            'email'    => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'min:8', 'confirmed'], // expects 'password_confirmation'
        ]);

        // 2. Create User
        $user = User::create([
            'name'     => $validated['name'],
            'email'    => $validated['email'],
            'password' => Hash::make($validated['password']),
            'is_admin' => 1,
        ]);

        

        // 4. Response (Return string for your curl test or redirect for browser)
        if ($request->wantsJson()) {
            return response()->json(['message' => 'User registered successfully'], 201);
        }

        return redirect('/dashboard');
    }
}

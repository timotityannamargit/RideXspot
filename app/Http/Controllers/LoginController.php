<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function submit(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {

            $request->session()->regenerate();

            return redirect()->route('autok')->with('alert', 'success');
        }

        return back()->with('alert', 'badpass')->withErrors([
            'email' => 'A megadott adatok nem egyeznek.',
        ]);
    }
    public function login(Request $request)
    {
        // 1. Validate the input
        // If this fails, Laravel automatically redirects back with error messages
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // 2. Attempt the login
        if (Auth::attempt($credentials)) {

            // 3. Prevent Session Fixation attacks
            $request->session()->regenerate();

            return redirect()->route('admin.cars.list')->with('status', 'Üdvözöljük újra!');
        }


        return back()->withErrors([
            'email' => 'A megadott adatok nem egyeznek a nyilvántartásunkkal.',
        ])->onlyInput('email');
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login');
    }

    public function register(Request $request)
    {
        $validated = $request->validate([
            'name'     => ['required', 'string', 'max:255'],
            'email'    => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'min:8', 'confirmed'],
        ]);

        $user = User::create([
            'name'     => $validated['name'],
            'email'    => $validated['email'],
            'password' => Hash::make($validated['password']),
            'is_admin' => 1,
        ]);
        return redirect()->route('admin.login')->with('alert', 'registered');
    }
}

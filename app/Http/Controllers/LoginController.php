<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

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

        // 4. Redirect to the intended page (or a default 'dashboard' route)
        return redirect()->route('admin.cars.list')->with('status', 'Üdvözöljük újra!');
    }

    // 5. If login fails, redirect back with an error message
    // 'onlyInput' keeps the email in the form so they don't have to retype it
    return back()->withErrors([
        'email' => 'A megadott adatok nem egyeznek a nyilvántartásunkkal.',
    ])->onlyInput('email');
}
    public function logout(){
        Auth::logout();
        return redirect()->route('admin.login');
    }
}
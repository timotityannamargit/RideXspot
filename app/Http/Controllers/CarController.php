<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use Illuminate\Support\Facades\Auth; // <-- Ezt add hozzá!

class CarController extends Controller
{
    public function index()
    {
        // Az Auth::check() biztosan működni fog és nem lesz piros
        $cars = Auth::check() ? Car::all() : collect();

        return view('pages.autok', compact('cars'));
    }
    
    // ... search metódus ...
}

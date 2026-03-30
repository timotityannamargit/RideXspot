<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('q');

        $cars = Car::query()
            ->where('name', 'LIKE', "%{$query}%")
            ->orWhere('engine', 'LIKE', "%{$query}%")
            ->orWhere('fuel', 'LIKE', "%{$query}%")
            ->get();

        return view('autok', compact('cars', 'query'));
    }
}

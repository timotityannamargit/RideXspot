<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarController extends Controller
{

    public function index()
    {

        return view('pages.autok') 
            ->with('cars',  \App\Models\Car::paginate(12));

    }
    
}

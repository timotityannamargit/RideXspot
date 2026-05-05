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
    public function api_list()
    {
        return \App\Models\Car::paginate();
    }
    public function list()
    {
        return view('pages.admin.cars.list')
            ->with('cars',  \App\Models\Car::paginate(12));
    }
}

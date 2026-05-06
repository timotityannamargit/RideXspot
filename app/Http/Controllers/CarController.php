<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller
{

    public function index()
    {

        return view('pages.autok')
            ->with('cars',  \App\Models\Car::paginate(12));
    }

    public function create(){
        return view('pages.admin.cars.create');
    }
    public function store(Request $request){
        return redirect()->route('admin.cars.index')->with('success', 'Autó hozzáadva!');
    }
    public function edit($id){
        $car = Car::findOrFail($id);
        return view('pages.admin.cars.edit', compact ('car'));
    }
    public function update(Request $request, $id){
        $car = Car::findOrFail($id);
        return redirect()->route('admin.cars.index')->with('success', 'Autó frissítve!');
    }
    public function destroy($id){
        $car = Car::findOrFail($id);
        $car->delete();
        return redirect()->route('admin.cars.index')->with('success', 'Autó törölve!');
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

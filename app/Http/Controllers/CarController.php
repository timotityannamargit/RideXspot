<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;

class CarController extends Controller
{

    public function index()
    {

        return view('pages.autok')
            ->with('cars',  \App\Models\Car::paginate(12));
    }

    public function create()
    {
        return view('pages.admin.cars.create');
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'img' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'model' => 'required|string|max:255',
            'motor_cc' => 'required|integer',
            'motor_type' => ['required', Rule::in(['benzin', 'Enyhe benzin', 'Plug-in hibrid', 'elektromos', 'Plug-in hibrid / benzinüzemű', 'Plug-in hibrid, benzinüzemű', 'Enyhe hibrid / Benzin', 'Hibrid / Benzin'])],
            'horsepower' => 'required|integer',
            'torque' => 'required|integer',
            'year' => 'required|integer',
            'link' => 'required|url',
        ]);
        DB::transaction(function () use ($validated, $request) {
            $file = $request->file('img');
            $file->move(public_path('img'), $file->getClientOriginalName());

            $validated['img'] = './img/' . $file->getClientOriginalName();
            Car::create($validated);
        });
        return redirect()->route('admin.cars.list')->with('success', 'Autó sikeresen hozzáadva!');
    }
    public function edit($id)
    {
        $car = Car::findOrFail($id);
        return view('pages.admin.cars.edit')->with('car', $car);
    }
    public function update(Request $request, $id) {
        $validated = $request->validate([
            'img' => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'model' => 'required|string|max:255',
            'motor_cc' => 'required|integer',
            'motor_type' => ['required', Rule::in(['benzin', 'Enyhe benzin', 'Plug-in hibrid', 'elektromos', 'Plug-in hibrid / benzinüzemű', 'Plug-in hibrid, benzinüzemű', 'Enyhe hibrid / Benzin', 'Hibrid / Benzin'])],
            'horsepower' => 'required|integer',
            'torque' => 'required|integer',
            'year' => 'required|integer',
            'link' => 'required|url',
        ]);
        $car = Car::findOrFail($id);
        DB::transaction(function () use ($validated, $request, $car) {
            if ($request->hasFile('img')) {
                $file = $request->file('img');
                $file->move(public_path('img'), $file->getClientOriginalName());
                $validated['img'] = './img/' . $file->getClientOriginalName();
            }
            $car->update($validated);
        });
        return redirect()->route('admin.cars.list')->with('success', 'Autó sikeresen frissítve!');
    }
    public function destroy($id) {
        $car = Car::findOrFail($id);
        $car->delete();
        return redirect()->route('admin.cars.list')->with('success', 'Autó sikeresen törölve!');
    }
    public function api_list()
    {
        return \App\Models\Car::paginate();
    }
    public function list()
    {
        return view('pages.admin.cars.list')
            ->with('cars',  \App\Models\Car::query()->orderBy('updated_at', 'desc')->paginate(12));
    }
}

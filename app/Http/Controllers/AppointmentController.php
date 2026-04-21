<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Enums\AppointmentStatus;
use Illuminate\Validation\Rule;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::all();

        return view('appointment.create', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        
        $validated = $request->validate([
            'name'       => 'required|string|max:255|min:3',
            'email'      => 'required|email',
            'phone'      => 'required|string|max:20',
            'date'       => [
                'required',
                'date_format:Y-m-d',
                'after_or_equal:today',
                Rule::unique('appointments', 'date')
                    ->where(function ($query) use ($request) {
                        return $query->where('time', $request->time);
                    }),
            ],
            'time'       => [
                'required',
                'date_format:H:i',
                Rule::unique('appointments', 'time')
                    ->where(function ($query) use ($request) {
                        return $query->where('date', $request->date);
                    }),
            ],
            'message'       => 'nullable|string',
        ]);
        
        Appointment::create([
            'status'     => AppointmentStatus::PENDING,
            ...$validated
        ]);
        return redirect()->route('home')->with('success', 'Sikeres foglalás!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

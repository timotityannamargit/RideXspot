<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Appointment;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Enums\AppointmentStatus;
use Illuminate\Validation\Rule;

class AppointmentController extends Controller
{
    public function booking(Request $request)
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


    public function list()
    {
        $appointments = Appointment::orderBy('date', 'asc')->orderBy('time', 'asc')->paginate(12);
        return view('pages.admin.appointments.list')->with('appointments', $appointments);
    }




    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.appointments.create')->with('statuses', AppointmentStatus::cases());
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
            'status'        => ['required', Rule::in(array_map(fn($status) => $status->value, AppointmentStatus::cases()))],
        ]);

        Appointment::create($validated);
        return redirect()->route('admin.appointments.list')->with('success', 'Foglalás sikeresen létrehozva!');
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $appointment = Appointment::findOrFail($id);
        return view('pages.admin.appointments.edit')
            ->with('appointment', $appointment)
            ->with('statuses', AppointmentStatus::cases());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $appointment = Appointment::findOrFail($id);

        $validated = $request->validate([
            'name'       => 'required|string|max:255|min:3',
            'email'      => 'required|email',
            'phone'      => 'required|string|max:20',
            'date'       => [
                'required',
                'date_format:Y-m-d',
                'after_or_equal:today',
                Rule::unique('appointments', 'date')
                    ->where(function ($query) use ($request, $appointment)  {
                        return $query->where('time', $request->time)->where('id', '<>', $appointment->id);
                    }),
            ],
            'time'       => [
                'required',
                'date_format:H:i',
                Rule::unique('appointments', 'time')
                    ->where(function ($query) use ($request, $appointment) {
                        return $query->where('date', $request->date)->where('id', '<>', $appointment->id);
                    }),
            ],
            'message'       => 'nullable|string',
            'status'        => ['required', Rule::in(array_map(fn($status) => $status->value, AppointmentStatus::cases()))],
        ]);
        $appointment->update($validated);
        return redirect()->route('admin.appointments.list')->with('success', 'Foglalás sikeresen frissítve!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $appointment = Appointment::findOrFail($id);
        $appointment->delete();
        return redirect()->route('admin.appointments.list')->with('success', 'Foglalás sikeresen törölve!');    
    }
}

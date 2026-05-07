@extends('pages.admin.layout')
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
@section('content')
    <div class="admin-container">
        <div class="admin-header">
            <h1>Foglalások kezelése</h1>
            <a href="{{ route('admin.appointments.create') }}" class="btn-add">+ Új foglalás</a>
        </div>

        <div class="table-responsive">
            <table class="admin-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Név</th>
                        <th>Email</th>
                        <th>Telefonszám</th>
                        <th>Dátum</th>
                        <th>Idő</th>
                        <th>Státusz</th>
                        <th class="text-right">Műveletek</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($appointments as $appointment)
                        <tr>
                            <td><span class="id-badge">#{{ $appointment->id }}</span></td>

                            <td>
                                <div style="font-weight: 600; color: #fff;">{{ $appointment->name }}</div>
                            </td>
                            <td>
                                <div style="font-weight: 600; color: #fff;">{{ $appointment->email }}</div>
                            </td>
                            <td>
                                <div style="font-weight: 600; color: #fff;">{{ $appointment->phone }}</div>
                            </td>
                            <td>
                                <div style="font-weight: 600; color: #fff;">{{ $appointment->date }}</div>
                            </td>
                            <td>
                                <div style="font-weight: 600; color: #fff;">{{ $appointment->time }}</div>
                            </td>
                            <td>
                                <div style="font-weight: 600; color: #fff;">{{ $appointment->status }}</div>
                            </td>

                            <td class="text-right">
                                <div class="action-buttons">
                                    <a href="{{ route('admin.appointments.edit', $appointment->id) }}" class="btn-edit">Szerkesztés</a>
                                    <form action="{{ route('admin.appointments.destroy', $appointment->id) }}" method="POST"
                                        onsubmit="return confirm('Biztosan törli?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn-delete">Törlés</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="pagination-wrapper">
            {{ $appointments->links() }}
        </div>
    </div>
    </div>
    <style>
        body {
            background-color: #5e5e5e;
        }
    </style>
@endsection

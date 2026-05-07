@extends('pages.admin.layout')
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
@section('content')
    <div class="admin-container">
        <div class="admin-header">
            <h1>Gépjárművek kezelése</h1>
            <a href="{{ route('admin.cars.create') }}" class="btn-add">+ Új autó</a>
        </div>

        <div class="table-responsive">
    <table class="admin-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Kép</th>
                <th>Modell</th>
                <th>Évjárat</th>
                <th>Motor</th>
                <th>Teljesítmény</th>
                <th class="text-right">Műveletek</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cars as $car)
                <tr>
                    <td><span class="id-badge">#{{ $car->id }}</span></td>
                    <td>
                        <img src="{{ asset($car->img) }}" alt="car" class="admin-thumbnail">
                    </td>
                    <td>
                        <div style="font-weight: 600; color: #fff;">{{ $car->model }}</div>
                    </td>
                    <td>{{ $car->year }}</td>
                    <td>
                        <span style="display:block;">{{ $car->motor_cc }} ccm</span>
                        <span style="font-size: 12px; color: var(--text-muted);">{{ $car->motor_type }}</span>
                    </td>
                    <td>
                        <span style="color: #fff;">{{ $car->horsepower }} LE</span> / 
                        <span style="color: var(--text-muted);">{{ $car->torque }} Nm</span>
                    </td>
                    <td class="text-right">
                        <div class="action-buttons">
                            <a href="{{ route('admin.cars.edit', $car->id) }}" class="btn-edit">Szerkesztés</a>
                            <form action="{{ route('admin.cars.destroy', $car->id) }}" method="POST" onsubmit="return confirm('Biztosan törli?')">
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
                {{ $cars->links() }}
            </div>
        </div>
    </div>
<style>
    body{
        background-color: #5e5e5e;
    }
</style>
@endsection

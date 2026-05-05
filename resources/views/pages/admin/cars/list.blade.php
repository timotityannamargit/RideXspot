@extends('pages.admin.layout')

@section('content')
    <div class="admin-container">
        <div class="admin-header">
            <h1>Gépjárművek kezelése</h1>
            <a href="{{ route('cars.create') }}" class="btn-add">+ Új autó</a>
        </div>

        <div class="table-responsive">
            <table class="admin-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Kép</th>
                        <th>Modell</th>
                        <th>Évjárat</th>
                        <th>Motor (ccm/típus)</th>
                        <th>Teljesítmény (LE/Nm)</th>
                        <th class="text-right">Műveletek</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cars as $car)
                        <tr>
                            <td>#{{ $car->id }}</td>
                            <td>
                                <img src="{{ $car->img }}" alt="car" class="admin-thumbnail">
                            </td>
                            <td><strong>{{ $car->model }}</strong></td>
                            <td>{{ $car->year }}</td>
                            <td>{{ $car->motor_cc }} / {{ $car->motor_type }}</td>
                            <td>{{ $car->horsepower }} / {{ $car->torque }}</td>
                            <td class="text-right">
                                <div class="action-buttons">
                                    <a href="{{ route('cars.edit', $car->id) }}" class="btn-edit">Szerkesztés</a>
                                    <form action="{{ route('cars.destroy', $car->id) }}" method="POST"
                                        style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn-delete"
                                            onclick="return confirm('Biztosan törli?')">Törlés</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="pagination-wrapper">
                {{ $cars->links() }}
            </div>
        </div>
    </div>


    <style>
        /* Styling for the pagination area */
    .pagination-wrapper {
        margin-top: 20px;
        display: flex;
        justify-content: center;
    }
    
    /* Optional: Laravel uses Tailwind by default for pagination. 
       If your buttons look huge, add this to your AppServiceProvider or use simple bootstrap: */
    .pagination-wrapper svg {
        width: 20px;
    }
    .pagination-wrapper nav div:first-child {
        display: none; /* Hides the "Showing X to Y" text for a cleaner look */
    }
        .admin-container {
            padding: 20px;
            font-family: sans-serif;
        }

        .admin-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        /* Table Styling */
        .admin-table {
            width: 100%;
            border-collapse: collapse;
            background: white;
            font-size: 14px;
        }

        .admin-table th,
        .admin-table td {
            padding: 12px;
            border-bottom: 1px solid #eee;
            text-align: left;
        }

        .admin-table th {
            background: #f8f9fa;
            color: #333;
            font-weight: 600;
        }

        .admin-table tr:hover {
            background: #fcfcfc;
        }

        /* Thumbnail */
        .admin-thumbnail {
            width: 60px;
            height: 40px;
            object-fit: cover;
            border-radius: 4px;
            border: 1px solid #ddd;
        }

        /* Buttons */
        .btn-add {
            background: #28a745;
            color: white;
            padding: 8px 16px;
            text-decoration: none;
            border-radius: 4px;
            font-weight: bold;
        }

        .btn-edit {
            color: #007bff;
            text-decoration: none;
            margin-right: 10px;
            font-weight: 500;
        }

        .btn-delete {
            background: none;
            border: none;
            color: #dc3545;
            cursor: pointer;
            font-weight: 500;
            padding: 0;
        }

        .text-right {
            text-align: right;
        }

        .action-buttons {
            display: flex;
            justify-content: flex-end;
            gap: 10px;
        }

        /* Responsive */
        .table-responsive {
            overflow-x: auto;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
    </style>
@endsection

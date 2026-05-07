@extends('pages.admin.layout')

@section('content')
    <div class="admin-form-container">
        <div class="form-header">
            <h1  style="color: black">Szerkesztés: {{ $car->model }}</h1>
            <a href="{{ route('admin.cars.list') }}" class="btn-back">← Vissza</a>
        </div>

        <form action="{{ route('admin.cars.update', $car->id) }}" method="POST" enctype="multipart/form-data"
            class="styled-form">
            @csrf
            @method('PUT') {{-- Critical for Update routes --}}

            <div class="form-grid">
                <div class="form-section">
                    <h3 style="color: black">Alapadatok</h3>

                    <label for="model">Modell megnevezése</label>
                    <input type="text" name="model" id="model" value="{{ old('model', $car->model) }}" required>

                    <label>Jelenlegi fotó</label>
                    <div style="margin-bottom: 10px;">
                        <img src="{{ asset($car->img) }}" style="width: 100px; border-radius: 4px; border: 1px solid #ddd;">
                    </div>

                    <label for="img">Új fotó feltöltése (hagyja üresen, ha nem változik)</label>
                    <input type="file" name="img" id="img" accept="image/*">

                    <label for="year" style="margin-top:15px;">Gyártási év</label>
                    <input type="number" name="year" id="year" value="{{ old('year', $car->year) }}" required>

                    <label for="link">Külső link</label>
                    <input type="text" name="link" id="link" value="{{ old('link', $car->link) }}">
                </div>

                <div class="form-section">
                    <h3 style="color: black">Technikai adatok</h3>

                    <label for="motor_type">Motor típusa</label>
                    <select name="motor_type" id="motor_type">
                        @php
                            $types = [
                                'benzin',
                                'Enyhe benzin',
                                'Plug-in hibrid',
                                'elektromos',
                                'Plug-in hibrid / benzinüzemű',
                                'Plug-in hibrid, benzinüzemű',
                                'Enyhe hibrid / Benzin',
                                'Hibrid / Benzin',
                            ];
                        @endphp
                        @foreach ($types as $type)
                            <option value="{{ $type }}"
                                {{ old('motor_type', $car->motor_type) == $type ? 'selected' : '' }}>
                                {{ $type }}
                            </option>
                        @endforeach
                    </select>

                    <div class="row" style="margin-top:15px;">
                        <div>
                            <label for="motor_cc">Hengerűrtartalom</label>
                            <input type="number" name="motor_cc" id="motor_cc"
                                value="{{ old('motor_cc', $car->motor_cc) }}" required>
                        </div>
                        <div>
                            <label for="horsepower">Lóerő</label>
                            <input type="number" name="horsepower" id="horsepower"
                                value="{{ old('horsepower', $car->horsepower) }}" required>
                        </div>
                    </div>

                    <label for="torque">Nyomaték (Nm)</label>
                    <input type="number" name="torque" id="torque" value="{{ old('torque', $car->torque) }}" required>
                </div>
            </div>

            <div class="form-footer">
                <button type="submit" class="btn-submit">Módosítások mentése</button>
            </div>
        </form>
    </div>
    <style>
        body{
            background-color: #494949;

        }
        .admin-form-container {
            max-width: 900px;
            margin: 40px auto;
            padding: 20px;
            font-family: sans-serif;
        }

        .form-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .btn-back {
            text-decoration: none;
            color: #666;
            font-size: 14px;
        }

        .styled-form {
            background: #7e7e7e;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
        }

        h3 {
            border-bottom: 2px solid #b6b6b6;
            padding-bottom: 10px;
            margin-bottom: 20px;
            color: #333;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            font-size: 14px;
            color: #555;
        }

        input,
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #969696;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
        }

        .error {
            color: #dc3545;
            font-size: 12px;
            display: block;
            margin-top: -10px;
            margin-bottom: 10px;
        }

        .form-footer {
            margin-top: 30px;
            text-align: right;
            border-top: 1px solid #494646;
            padding-top: 20px;
        }

        .btn-submit {
            background: #28a745;
            color: white;
            padding: 12px 30px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
        }

        .btn-submit:hover {
            background: #218838;
        }

        @media (max-width: 600px) {
            .form-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
@endsection

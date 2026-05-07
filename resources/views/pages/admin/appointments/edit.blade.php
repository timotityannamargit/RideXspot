@extends('pages.admin.layout')

@section('content')
    <div class="admin-form-container">
        <div class="form-header">
            <h1  style="color: black">Foglalás szerkeztése</h1>
            <a href="{{ route('admin.appointments.list') }}" class="btn-back">← Vissza</a>
        </div>

        <form action="{{ route('admin.appointments.update', $appointment->id) }}" method="POST" enctype="multipart/form-data"
            class="styled-form">
            @csrf
            @method('PUT') {{-- Critical for Update routes --}}

            <div class="form-grid">
                <div class="form-section">
                    <h3>Ügyféladatok</h3>

                    <label for="name">Ügyfél neve</label>
                    <input type="text" name="name" id="name" value="{{  old('name', $appointment->name) }}" required>
                    <label for="email">Ügyfél email-címe</label>
                    <input type="email" name="email" id="email" value="{{ old('email', $appointment->email) }}" required>
                    <label for="phone">Ügyfél telefonszáma</label>
                    <input type="text" name="phone" id="phone" value="{{ old('phone', $appointment->phone) }}" required>


                </div>

                <div class="form-section">
                    <h3>Foglalási adatok</h3>
                    <div class="form-group">
                        <label>Dátum</label>

                        <input type="date" class="@error('date') is-invalid @enderror" name="date"
                            value="{{ old('date', $appointment->date) }}" required>
                        @error('date')
                            <div class="alert alert-danger" style="margin-top:5px">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Időpont</label>
                        <input type="text" class="@error('time') is-invalid @enderror" id="timePicker"
                            placeholder="Válassz időpontot..." name="time" value="{{ old('time', $appointment->time) }}" required>
                        @error('time')
                            <div class="alert alert-danger" style="margin-top:5px">{{ $message }}</div>
                        @enderror
                    </div>
                    <label for="status">Státusz</label>
                    <select name="status" id="status">
                        @foreach ($statuses as $status)
                            <option value="{{ $status->value }}" {{  old('status', $appointment->status) === $status->value ? 'selected' : ''  }}>
                                {{ $status->name}} 
                            </option>
                        @endforeach
                    </select>
                    <div class="form-group">
                    <label>Megjegyzés</label>
                    <textarea name="message">{{ old('message', $appointment->message) }}</textarea>
                </div>
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

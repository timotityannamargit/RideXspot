@extends('pages.admin.layout')

@section('content')
<div class="admin-form-container">
    <div class="form-header">
        <h1>Új autó hozzáadása</h1>
        <a href="{{ route('admin.cars.list') }}" class="btn-back">← Vissza</a>
    </div>

    <form action="{{ route('admin.cars.store') }}" method="POST" enctype="multipart/form-data" class="styled-form">
        @csrf

        <div class="form-grid">
            <div class="form-section">
                <h3>Alapadatok</h3>
                
                <label for="model">Modell megnevezése</label>
                <input type="text" name="model" id="model" value="{{ old('model') }}" required>

                <label for="img">Autó fotója (Feltöltés)</label>
                <input type="file" name="img" id="img" accept="image/*" required>
                <small>Engedélyezett formátumok: jpg, png, webp</small>

                <label for="year" style="margin-top:15px;">Gyártási év</label>
                <input type="number" name="year" id="year" value="{{ old('year', date('Y')) }}" required>

                <label for="link">Külső link</label>
                <input type="text" name="link" id="link" value="{{ old('link') }}">
            </div>

            <div class="form-section">
                <h3>Technikai adatok</h3>

                <label for="motor_type">Motor típusa</label>
                <select name="motor_type" id="motor_type">
                    <option value="benzin">benzin</option>
                    <option value="Enyhe benzin">Enyhe benzin</option>
                    <option value="Plug-in hibrid">Plug-in hibrid</option>
                    <option value="elektromos">elektromos</option>
                    <option value="Plug-in hibrid / benzinüzemű">Plug-in hibrid / benzinüzemű</option>
                    <option value="Plug-in hibrid, benzinüzemű">Plug-in hibrid, benzinüzemű</option>
                    <option value="Enyhe hibrid / Benzin">Enyhe hibrid / Benzin</option>
                    <option value="Hibrid / Benzin">Hibrid / Benzin</option>
                </select>

                <div class="row" style="margin-top:15px;">
                    <div>
                        <label for="motor_cc">Hengerűrtartalom (ccm)</label>
                        <input type="number" name="motor_cc" id="motor_cc" value="{{ old('motor_cc') }}" required>
                    </div>
                    <div>
                        <label for="horsepower">Lóerő (HP)</label>
                        <input type="number" name="horsepower" id="horsepower" value="{{ old('horsepower') }}" required>
                    </div>
                </div>

                <label for="torque">Nyomaték (Nm)</label>
                <input type="number" name="torque" id="torque" value="{{ old('torque') }}" required>
            </div>
        </div>

        <div class="form-footer">
            <button type="submit" class="btn-submit">Mentés az adatbázisba</button>
        </div>
    </form>
</div>
{{-- Styles remain the same as previous response --}}
<style>
    .admin-form-container { max-width: 900px; margin: 40px auto; padding: 20px; font-family: sans-serif; }
    .form-header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px; }
    .btn-back { text-decoration: none; color: #666; font-size: 14px; }
    
    .styled-form { background: #fff; padding: 30px; border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); }
    .form-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 30px; }
    
    h3 { border-bottom: 2px solid #eee; padding-bottom: 10px; margin-bottom: 20px; color: #333; }
    label { display: block; margin-bottom: 5px; font-weight: bold; font-size: 14px; color: #555; }
    input, select { width: 100%; padding: 10px; margin-bottom: 15px; border: 1px solid #ddd; border-radius: 4px; box-sizing: border-box; }
    
    .row { display: grid; grid-template-columns: 1fr 1fr; gap: 15px; }
    .error { color: #dc3545; font-size: 12px; display: block; margin-top: -10px; margin-bottom: 10px; }
    
    .form-footer { margin-top: 30px; text-align: right; border-top: 1px solid #eee; padding-top: 20px; }
    .btn-submit { background: #28a745; color: white; padding: 12px 30px; border: none; border-radius: 4px; cursor: pointer; font-size: 16px; font-weight: bold; }
    .btn-submit:hover { background: #218838; }

    @media (max-width: 600px) { .form-grid { grid-template-columns: 1fr; } }
</style>
@endsection
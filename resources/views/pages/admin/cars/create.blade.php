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

    :root {
    --main-bg: #0f0f0f;
    --card-bg: #1a1a1a;
    --input-bg: #252525;
    --input-border: #333333;
    --input-focus: #d5001c;
    --text-primary: #ffffff;
    --text-secondary: #a0a0a0;
}

body {
    background-color: var(--main-bg);
    color: var(--text-primary);
    font-family: 'Inter', sans-serif;
}

.form-container {
    background-color: var(--card-bg);
    border-radius: 12px;
    padding: 40px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.5);
    max-width: 900px;
    margin: 40px auto;
}

h2 {
    color: var(--text-primary);
    font-weight: 700;
    margin-bottom: 25px;
    border-bottom: 1px solid var(--input-border);
    padding-bottom: 10px;
}

.form-group label {
    display: block;
    color: var(--text-secondary);
    font-size: 13px;
    font-weight: 600;
    margin-bottom: 8px;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.form-control {
    width: 100%;
    background-color: var(--input-bg);
    border: 1px solid var(--input-border);
    border-radius: 8px;
    padding: 12px 15px;
    color: white;
    font-size: 15px;
    transition: all 0.3s ease;
}

.form-control:focus {
    outline: none;
    border-color: var(--input-focus);
    background-color: #2a2a2a;
    box-shadow: 0 0 0 2px rgba(213, 0, 28, 0.2);
}

input[type="file"]::file-selector-button {
    background-color: #333;
    color: white;
    border: none;
    padding: 8px 15px;
    border-radius: 4px;
    margin-right: 15px;
    cursor: pointer;
    transition: 0.3s;
}

input[type="file"]::file-selector-button:hover {
    background-color: #444;
}

.btn-save {
    background: linear-gradient(135deg, #28a745 0%, #1e7e34 100%);
    border: none;
    color: white;
    padding: 14px 30px;
    border-radius: 8px;
    font-weight: 700;
    cursor: pointer;
    transition: transform 0.2s, box-shadow 0.2s;
    float: right;
    margin-top: 20px;
}

.btn-save:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(40, 167, 69, 0.3);
}

.back-link {
    color: var(--text-secondary);
    text-decoration: none;
    font-size: 14px;
    transition: 0.3s;
}

.back-link:hover {
    color: white;
}
    @media (max-width: 600px) { .form-grid { grid-template-columns: 1fr; } }
</style>
@endsection
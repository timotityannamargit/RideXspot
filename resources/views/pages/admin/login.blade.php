@extends('pages.admin.layout') {{-- Assumes your layout file is named layouts/app.blade.php --}}

@section('content')
<div class="login-container">
    <h2>Bejelentkezés</h2>

    {{-- Display General Alert Messages --}}
    @if(session('alert') == 'badpass')
        <div style="color: red;">Hibás email cím vagy jelszó!</div>
    @endif

    <form action="{{ route('login.submit') }}" method="POST">
        @csrf {{-- This prevents the 419 Page Expired error --}}

        <div class="form-group">
            <label for="email">Email cím:</label>
            <input type="email" name="email" id="email" value="{{ old('email') }}" required>
            @error('email')
                <span style="color: red;">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="password">Jelszó:</label>
            <input type="password" name="password" id="password" required>
            @error('password')
                <span style="color: red;">{{ $message }}</span>
            @enderror
        </div>

        <button type="submit">Belépés</button>
    </form>
</div>

<style>
    .login-container {
        max-width: 400px;
        margin: 50px auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 8px;
    }
    .form-group {
        margin-bottom: 15px;
    }
    .form-group label {
        display: block;
        margin-bottom: 5px;
    }
    .form-group input {
        width: 100%;
        padding: 8px;
        box-sizing: border-box;
    }
    button {
        width: 100%;
        padding: 10px;
        background-color: #007bff;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
</style>
@endsection
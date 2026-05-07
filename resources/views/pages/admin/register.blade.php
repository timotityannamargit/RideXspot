@extends('pages.admin.layout')

@section('content')
    <div class="login-container">
        <h2>Regisztráció</h2>

        <form action="{{ route('admin.register.submit') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="name">Teljes név:</label>
                <input type="text" name="name" id="name" value="{{ old('name') }}" required autofocus>
                @error('name')
                    <span style="color: red; font-size: 0.8em;">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="email">Email cím:</label>
                <input type="email" name="email" id="email" value="{{ old('email') }}" required>
                @error('email')
                    <span style="color: red; font-size: 0.8em;">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="password">Jelszó:</label>
                <input type="password" name="password" id="password" required>
                @error('password')
                    <span style="color: red; font-size: 0.8em;">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="password_confirmation">Jelszó megerősítése:</label>
                <input type="password" name="password_confirmation" id="password_confirmation" required>
            </div>

            <button type="submit">Regisztráció</button>
        </form>

        <div style="margin-top: 15px; text-align: center;">
            <a href="{{ route('admin.login') }}">Vissza</a>
        </div>
    </div>

    <style>
        /* Reusing your existing styles for consistency */
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
            background-color: #28a745;
            /* Green for registration */
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #218838;
        }
    </style>
@endsection

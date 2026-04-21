@extends('layout')

@push('pages')
    <link rel="stylesheet" href="{{ asset('css/booking.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" type="text/css" href="https://npmcdn.com/flatpickr/dist/themes/light.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
@endpush

@push('aftercontent')
    <script>
        flatpickr("#timePicker", {
            enableTime: true,
            noCalendar: true,
            dateFormat: "H:i",
            time_24hr: true,

            // 1. Set the range
            minTime: "08:00",
            maxTime: "16:00",

            // 2. Set the hourly step (60 minutes)
            minuteIncrement: 60,

            // Optional: Ensure the default starts at 8:00
            defaultDate: "08:00"
        });
    </script>
@endpush
@section('content')
    <section class="hero">
        <div class="hero-image"></div>

        <div class="hero-content">
            <h4>RideXspot ZRT.</h4>
            <h1>IDŐPONT FOGLALÁS</h1>
            <p>Foglalj időpontot gyorsan és egyszerűen online!</p>
        </div>
    </section>

    <section id="foglalas" class="booking-section">
        <div class="container">
            <h2>Időpont foglalás</h2>

            <form action="{{ route('appointment.store') }}" method="POST" class="booking-form">
                @csrf

                <div class="form-group">
                    <label>Név</label>
                    <input type="text" class="@error('name') is-invalid @enderror" name="name"value="{{ old('name') }}" required>
                    @error('name')
                        <div class="alert alert-danger" style="margin-top:5px">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="@error('email') is-invalid @enderror" name="email"value="{{ old('email') }}" required>
                    @error('email')
                         <div class="alert alert-danger" style="margin-top:5px">{{ $message }}</div>
                        <div class="alert alert-danger" style="margin-top:5px">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Telefonszám</label>
                    <input type="text" class="@error('phone') is-invalid @enderror" name="phone"value="{{ old('phone') }}" required>
                    @error('phone')
                        <div class="alert alert-danger" style="margin-top:5px">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Dátum</label>

                    <input type="date" class="@error('date') is-invalid @enderror"
                        name="date" value="{{ old('date') }}" required>
                    @error('date')
                        <div class="alert alert-danger" style="margin-top:5px">{{ $message }}</div>
                    @enderror
                </div>

                <!--<div class="form-group">
                            <label>Időpont</label>
                            <input id="time_input" type="time" name="time" min="08:00" max="16:00" step="3600"
                                required>
                        </div>-->
                <div class="form-group">
                    <label>Időpont</label>
                    <input type="text" class="@error('time') is-invalid @enderror" id="timePicker" placeholder="Válassz időpontot..." name="time"
                        value="{{ old('time') }}" required>
                        @error('time')
                        <div class="alert alert-danger" style="margin-top:5px">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Megjegyzés</label>
                    <textarea name="message">{{ old('message') }}</textarea>
                </div>

                <button type="submit" class="btn">
                    Foglalás elküldése →
                </button>
            </form>
        </div>
    </section>
@endsection

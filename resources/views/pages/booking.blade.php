@extends("layout")

@push('pages')
<link rel="stylesheet" href="{{ asset('css/booking.css') }}">
@endpush

@section('content')

<!-- Hero -->
<section class="hero">
    <div class="hero-image"></div>

    <div class="hero-content">
        <h4>RideXspot ZRT.</h4>
        <h1>IDŐPONT FOGLALÁS</h1>
        <p>Foglalj időpontot gyorsan és egyszerűen online!</p>
    </div>
</section>

<!-- Booking Form -->
<section id="foglalas" class="booking-section">
    <div class="container">
        <h2>Időpont foglalás</h2>

        <form action="{{ route('booking.store') }}" method="POST" class="booking-form">
            @csrf

            <div class="form-group">
                <label>Név</label>
                <input type="text" name="name" required>
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" required>
            </div>

            <div class="form-group">
                <label>Telefonszám</label>
                <input type="text" name="phone" required>
            </div>

            <div class="form-group">
                <label>Dátum</label>
                <input type="date" name="date" required>
            </div>

            <div class="form-group">
                <label>Időpont</label>
                <input type="time" name="time" required>
            </div>

            <div class="form-group">
                <label>Megjegyzés</label>
                <textarea name="message"></textarea>
            </div>

            <button type="submit" class="btn">
                Foglalás elküldése →
            </button>
        </form>
    </div>
</section>

@endsection
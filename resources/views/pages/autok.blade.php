@extends('layout')

@push('pages')
    <link rel="stylesheet" href="{{ asset('css/autok.css') }}">
@endpush

@section('content')
    <main class="autok-section" role="main" aria-labelledby="autok-heading">
        <div class="container">
            <aside class="left">
                <h1 id="autok-heading" class="huge-title">AUTÓINK</h1>
            </aside>
            <div class="cars-grid">

                <div class="car-card">
                    <img src="public/img/bmw4_cabrio.jpg" alt="Autó">

                    <div class="car-info">
                        <p><b>MODELL</b> Dodge Challenger</p>
                        <p><b>MOTOR</b> 5.7 V8</p>
                        <p><b>TELJESÍTMÉNY</b> 377 LE</p>
                        <p><b>ÉVJÁRAT</b> 2018</p>
                        <p><b>ÁR</b> 13.390.000 Ft</p>
                    </div>

                    <button class="car-btn">Bővebben</button>
                </div>

                <div class="car-card">
                    <img src="/images/car2.jpg" alt="Autó">

                    <div class="car-info">
                        <p><b>MODELL</b> Dodge Challenger</p>
                        <p><b>MOTOR</b> 6.4 V8</p>
                        <p><b>TELJESÍTMÉNY</b> 486 LE</p>
                        <p><b>ÉVJÁRAT</b> 2015</p>
                        <p><b>ÁR</b> 14.500.000 Ft</p>
                    </div>

                    <button class="car-btn">Bővebben</button>
                </div>

            </div>

            <figure class="right" aria-hidden="true">
            </figure>
        </div>
    </main>
@endsection

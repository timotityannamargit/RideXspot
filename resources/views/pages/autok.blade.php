@extends('layout')

@push('pages')
    <link rel="stylesheet" href="{{ asset('css/autok.css') }}">
@endpush

@section('content')
    <main class="autok-section" role="main" aria-labelledby="autok-heading">
        <div class="container">
            <h1 id="autok-heading" class="huge-title">AUTÓINK</h1>

            <!-- Keresőmező -->
            <form action="{{ route('cars.search') }}" method="GET" class="relative mb-8">
                <input type="text" name="q" placeholder="Keresés (pl. Audi A5)...">


            </form>

            <!-- Kártyák Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                <!-- Audi A4 -->
                <div class="card">
                    <img src="./img/audi_a4.jpg" alt="Audi A4 2015–2024">
                    <h3>Audi A4</h3>
                    <p><strong>150–265 LE, 2.0–3.0L, benzin/dízel, ~2015–2024</strong></p>
                </div>

                <!-- Audi A5 -->
                <div class="card">
                    <img src="./img/audi_a5.jpg" alt="Audi A5 2016–2024">
                    <h3>Audi A5</h3>
                    <p><strong>150–450 LE, 2.0–3.0L, benzin/dízel, ~2016–2024</strong></p>
                </div>

                <!-- Audi A6 -->
                <div class="card">
                    <img src="./img/audi_a6.avif" alt="Audi A6 2018–2024">
                    <h3>Audi A6</h3>
                    <p><strong>163–340 LE, 2.0–3.0L, benzin/dízel, ~2018–2024</strong></p>
                </div>

                <!-- Audi A7 -->
                <div class="card">
                    <img src="./img/audi_a7.jpg" alt="Audi A7 2018–2024">
                    <h3>Audi A7</h3>
                    <p><strong>204–340 LE, 2.0–3.0L, benzin/dízel, ~2018–2024</strong></p>
                </div>

                <!-- Audi RS4 -->
                <div class="card">
                    <img src="./img/audirs4.jpg" alt="Audi RS4 2018–2024">
                    <h3>Audi RS4</h3>
                    <p><strong>450 LE, 2.9L V6 biturbo, benzin, ~2018–2024</strong></p>
                </div>

                <!-- Audi RS5 -->
                <div class="card">
                    <img src="./img/audirs5.jpg" alt="Audi RS5 2017–2024">
                    <h3>Audi RS5</h3>
                    <p><strong>450 LE, 2.9L V6 biturbo, benzin, ~2017–2024</strong></p>
                </div>

                <!-- Audi RS6 -->
                <div class="card">
                    <img src="./img/audirs6.jpg" alt="Audi RS6 2019–2024">
                    <h3>Audi RS6</h3>
                    <p><strong>600–630 LE, 4.0L V8 biturbo, benzin (mild hibrid), ~2019–2024</strong></p>
                </div>

                <!-- Audi RS7 -->
                <div class="card">
                    <img src="./img/audirs7.webp" alt="Audi RS7 2020–2024">
                    <h3>Audi RS7</h3>
                    <p><strong>600 LE, 4.0L V8 biturbo, benzin, ~2020–2024</strong></p>
                </div>
                <!-- Audi Q2 -->
                <div class="card">
                    <img src="./img/audi-q2-edition-1.jpg" alt="Audi Q8 2019–2024">
                    <h3>Audi Q2</h3>
                    <p><strong>231–340 LE, 3.0L, dízel/benzin, ~2019–2024</strong></p>
                </div>
                <!-- Audi Q3 -->
                <div class="card">
                    <img src="./img/audi_q3.jpg" alt="Audi Q3 2019–2024">
                    <h3>Audi Q3</h3>
                    <p><strong>231–340 LE, 3.0L, dízel/benzin, ~2019–2024</strong></p>
                </div>

                <!-- Audi Q7 -->
                <div class="card">
                    <img src="./img/q7_audi.jpg" alt="Audi Q7 2019–2024">
                    <h3>Audi Q7</h3>
                    <p><strong>231–340 LE, 3.0L, dízel/benzin, ~2019–2024</strong></p>
                </div>
                <!-- Audi RS Q8 -->
                <div class="card">
                    <img src="./img/rsq8_audi.jpg" alt="Audi Q8 2019–2024">
                    <h3>Audi RS Q8</h3>
                    <p><strong>231–340 LE, 3.0L, dízel/benzin, ~2019–2024</strong></p>
                </div>



                <!-- BMW 330e -->
                <div class="card">
                    <img src="./img/bmw_330e_hybrid.jpg" alt="BMW 330e 2019–2024">
                    <h3>BMW 330e</h3>
                    <p><strong>252–292 LE, 2.0L + elektromos, plug-in hibrid, ~2019–2024</strong></p>
                </div>

                <!-- BMW 520d -->
                <div class="card">
                    <img src="./img/bmw_520_2022.jpg" alt="BMW 520d 2017–2024">
                    <h3>BMW 520d</h3>
                    <p><strong>190 LE, 2.0L, dízel, ~2017–2024</strong></p>
                </div>

                <!-- BMW 520d xDrive -->
                <div class="card">
                    <img src="./img/8bmw.jpg" alt="BMW 520d xDrive 2017–2024">
                    <h3>BMW 8 series</h3>
                </div>

                <!-- BMW 4 Cabrio -->
                <div class="card">
                    <img src="./img/bmw4_cabrio.jpg" alt="BMW 4 Cabrio 2020–2024">
                    <h3>BMW 4 Cabrio</h3>
                    <p><strong>184–374 LE, 2.0–3.0L, benzin/dízel, ~2020–2024</strong></p>
                </div>

                <!-- BMW Z4 -->
                <div class="card">
                    <img src="./img/BMW-Z4-2009-2017.jpg" alt="BMW Z4 2019–2024">
                    <h3>BMW Z4</h3>
                    <p><strong>197–340 LE, 2.0–3.0L, benzin, ~2019–2024</strong></p>
                </div>

                <!-- BMW E46 -->
                <div class="card">
                    <img src="./img/e46_bmw_3.jpg" alt="BMW E46 1998–2006">
                    <h3>BMW E46</h3>
                    <p><strong>105–343 LE, 1.8–3.2L, benzin/dízel, 1998–2006</strong></p>
                </div>

                <!-- BMW E36 -->
                <div class="card">
                    <img src="./img/06.jpg" alt="BMW E36 1990–2000">
                    <h3>BMW E36</h3>
                    <p><strong>90–321 LE, 1.6–3.2L, benzin/dízel, 1990–2000</strong></p>
                </div>
            </div>
    </main>
@endsection

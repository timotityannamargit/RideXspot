@extends('layout')

@push('pages')
    <link rel="stylesheet" href="{{ asset('css/autok.css') }}">
@endpush

@section('content')
    <main class="autok-section" role="main" aria-labelledby="autok-heading">
        <div class="container">
            <h1 id="autok-heading" class="huge-title">AUTÓINK</h1>



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




                <!-- BMW 3 series (e34) -->
                <div class="card">
                    <img src="./img/e34bmw.jpg" alt="BMW 330e 2019–2024">
                    <h3>BMW 3 Series (E30)</h3>
                    <p><strong>252–292 LE, 2.0L + elektromos, plug-in hibrid, ~2019–2024</strong></p>
                </div>
                <!-- BMW 3 Series (E36) -->
                <div class="card">
                    <img src="./img/06.jpg" alt="BMW E36 1990–2000">
                    <h3>BMW 3 Series (E36)</h3>
                    <p><strong>90–321 LE, 1.6–3.2L, benzin/dízel, 1990–2000</strong></p>
                </div>
                <!-- BMW 3 Series (E46) -->
                <div class="card">
                    <img src="./img/e46_bmw_3.jpg" alt="BMW E46 1998–2006">
                    <h3>BMW 3 Series (E46)</h3>
                    <p><strong>105–343 LE, 1.8–3.2L, benzin/dízel, 1998–2006</strong></p>
                </div>
                <!-- BMW 3 Series (E90) -->
                <div class="card">
                    <img src="./img/BMW-3-Series-E90-E92-1.webp" alt="BMW E90 2004–2013">
                    <h3>BMW 3 Series (E90)</h3>
                    <p><strong>105–343 LE, 1.8–3.2L, benzin/dízel, 2004–2013</strong></p>
                </div>
                <!-- BMW 3 Series (F30) -->
                <div class="card">
                    <img src="./img/3-Series-F30-5.jpg" alt="BMW F30 2012–2019">
                    <h3>BMW 3 Series (F30)</h3>
                    <p><strong>105–343 LE, 1.8–3.2L, benzin/dízel, 2012–2019</strong></p>
                </div>
                <!-- BMW 3 Series (E90) -->
                <div class="card">
                    <img src="./img/bmw_g203.webp" alt="BMW 3 Series (G20) 2019–2024">
                    <h3>BMW 3 Series (G20)</h3>
                    <p><strong>105–343 LE, 1.8–3.2L, benzin/dízel, 2019–2024</strong></p>
                </div>

                <!-- BMW 5 Series (E39) -->
                <div class="card">
                    
                    <img src="./img/BMW-5-Series-1996-1280-21.jpg" alt="BMW 5 Series (E39) 1995–2004">
                    <h3>BMW 5 Series (E39)</h3>
                    <p><strong>190 LE, 2.0L, dízel, ~1995–2004</strong></p>
                </div>

                <!-- BMW 5 Series (E60) -->
                <div class="card">
                    <img src="./img/BMW-E60-5-Series-images-02.jpg" alt="BMW E60 1987–1996">
                    <h3>BMW 5 Series (E60)</h3>
                    <p><strong>113–340 LE, 1.8–3.8L, benzin/dízel, ~1987–1996</strong></p>
                </div>
                <!-- BMW 5 Series (F10) -->
                <div class="card">
                    <img src="./img/BMW-F10-5-Series-images-19.jpg" alt="BMW 5 Series (F10) 2010–2017">
                    <h3>BMW 5 Series (F10)</h3>
                    <p><strong>113–340 LE, 1.8–3.8L, benzin/dízel, ~2010–2017</strong></p>
                </div>
                <!-- BMW 5 Series (G30) -->
                <div class="card">
                    <img src="./img/bmw_5_series_g30.jpg" alt="BMW 5 Series (G30) 2017–2023">
                    <h3>BMW 5 Series (G30)</h3>
                    <p><strong>113–340 LE, 1.8–3.8L, benzin/dízel, ~2017–2023</strong></p>
                </div>
                <!-- BMW 5 Series (G60) -->
                <div class="card">
                    <img src="./img/bmw_5_series_g60.webp" alt="BMW 5 Series (G60) 2023–">
                    <h3>BMW 5 Series (G60)</h3>
                    <p><strong>113–340 LE, 1.8–3.8L, benzin/dízel, ~2023–</strong></p>
                </div>
                

               

                <!-- BMW Z Series (Z4) -->
                <div class="card">
                    <img src="./img/BMW-Z4-2009-2017.jpg" alt="BMW Z Series (Z4) 2019–2024">
                    <h3>BMW Z Series (Z4)</h3>
                    <p><strong>197–340 LE, 2.0–3.0L, benzin, ~2019–2024</strong></p>
                </div>
                


            </div>
    </main>
@endsection

@extends('layout')

@push('pages')
    <link rel="stylesheet" href="{{ asset('css/autok.css') }}">
@endpush

@section('content')
    <main class="autok-section" role="main" aria-labelledby="autok-heading">
        <div class="container">
            <h1 id="autok-heading" class="huge-title">AUTÓINK</h1>
            </aside>


            <table>
                <tr>
                    <td>
                        <div class="card">
                            <img src="./img/audi_a4.jpg">
                            <h3>Audi a4</h3>
                            <p><strong>150–265 LE, 2.0–3.0L, benzin/dízel, ~2015–2024</strong></p>
                        </div>
                    </td>

                    <td>
                        <div class="card">
                            <img src="./img/audi_a5.jpg">
                            <h3>Audi a5</h3>
                            <p><strong>150–450 LE, 2.0–3.0L, benzin/dízel, ~2016–2024</strong></p>
                        </div>
                    </td>

                    <td>
                        <div class="card">
                            <img src="./img/audi_a6.avif">
                            <h3>Audi a6</h3>
                            <p><strong>163–340 LE, 2.0–3.0L, benzin/dízel, ~2018–2024</strong></p>
                        </div>
                    </td>

                    <td>
                        <div class="card">
                            <img src="./img/audi_a7.jpg">
                            <h3>Audi a7</h3>
                            <p><strong>204–340 LE, 2.0–3.0L, benzin/dízel, ~2018–2024</strong></p>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <div class="card"><img src="./img/audirs4.jpg">
                            <h3>Audi rs4</h3>
                            <p><strong>450 LE, 2.9L V6 biturbo, benzin, ~2018–2024</strong></p>
                        </div>
                    </td>
                    <td>
                        <div class="card"><img src="./img/audirs5.jpg">
                            <h3>Audi rs5</h3>
                            <p><strong>450 LE, 2.9L V6 biturbo, benzin, ~2017–2024</strong></p>
                        </div>
                    </td>
                    <td>
                        <div class="card"><img src="./img/audirs6.jpg">
                            <h3>Audi rs6</h3>
                            <p><strong>600–630 LE, 4.0L V8 biturbo, benzin (mild hibrid), ~2019–2024</strong></p>
                        </div>
                    </td>
                    <td>
                        <div class="card"><img src="./img/audirs7.webp">
                            <h3>Audi rs7</h3>
                            <p><strong>600 LE, 4.0L V8 biturbo, benzin, ~2020–2024</strong></p>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <div class="card"><img src="./img/audi-q8-landing2-1-scaled.jpg">
                            <h3>Audi q8</h3>
                            <p><strong>231–340 LE, 3.0L, dízel/benzin, ~2019–2024</strong></p>
                        </div>
                    </td>
                    <td>
                        <div class="card"><img src="./img/bmw_330e_hybrid.jpg">
                            <h3>Bmw 330e</h3>
                            <p><strong>252–292 LE, 2.0L + elektromos, plug-in hibrid, ~2019–2024</strong></p>
                        </div>
                    </td>
                    <td>
                        <div class="card"><img src="./img/bmw_520_2022.jpg">
                            <h3>Bmw 520d</h3>
                            <p><strong>190 LE, 2.0L, dízel, ~2017–2024</strong></p>
                        </div>
                    </td>
                    <td>
                        <div class="card"><img src="./img/bmw_xdrive_520d.jpg">
                            <h3>Bmw 520d</h3>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <div class="card"><img src="./img/bmw4_cabrio.jpg">
                            <h3>Bmw 4 cabrio</h3>
                            <p><strong>184–374 LE, 2.0–3.0L, benzin/dízel, ~2020–2024</strong></p>
                        </div>
                    </td>
                    <td>
                        <div class="card"><img src="./img/BMW-Z4-2009-2017.jpg">
                            <h3>Bmw Z4</h3>
                            <p><strong>197–340 LE, 2.0–3.0L, benzin, ~2019–2024</strong></p>
                        </div>
                    </td>
                    <td>
                        <div class="card"><img src="./img/image.webp">
                            <h3>Bmw e46</h3>
                            <p><strong>105–343 LE, 1.8–3.2L, benzin/dízel, 1998–2006</strong></p>
                        </div>
                    </td>
                    <td>
                        <div class="card"><img src="./img/06.jpg">
                            <h3>Bmw e36</h3>
                            <p><strong>90–321 LE, 1.6–3.2L, benzin/dízel, 1990–2000</strong></p>
                        </div>
                    </td>
                </tr>

            </table>
    </main>
@endsection

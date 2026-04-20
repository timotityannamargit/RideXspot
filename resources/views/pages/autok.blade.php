@extends('layout')

@push('pages')
    <link rel="stylesheet" href="{{ asset('css/autok.css') }}">
@endpush

@section('content')
    <main class="autok-section" role="main" aria-labelledby="autok-heading">
        <div class="container">

            <h1 id="autok-heading" class="huge-title">AUTÓINK</h1>

            <div class="cars-grid">

                <div class="card">
                    <img src="./img/audi_a4.jpg" alt="Audi A4 2015–2024">
                    <div class="card-body">
                        <p><span>🚘 MODELL:</span> <span>Audi A4 B8</span></p>
                        <p><span>⚡ MOTOR:</span> <span> 1798 cm³, benzin</span></p>
                        <p><span>🏁 TELJESÍTMÉNY:</span> <span>120 LE/ 250 Nm</span></p>
                        <p><span>🕐 ÉVJÁRAT:</span> <span>2008</span></p>
                        <p><span>💲 ÁR:</span> <span>—</span></p>
                        <a href="https://www.ultimatespecs.com/car-specs/Audi/140739/Audi-A4-(B9-2020)-35-TFSI-.html"
                            class="btn">Bővebben</a>
                    </div>
                </div>

                <div class="card">
                    <img src="./img/audi_a5.jpg" alt="Audi A5 2016–2024">
                    <div class="card-body">
                        <p><span>🚘 MODELL:</span> <span>Audi A5 Sportback</span></p>
                        <p><span>⚡ MOTOR:</span> <span>1984 cm³, Enyhe benzin</span></p>
                        <p><span>🏁 TELJESÍTMÉNY:</span> <span>150 LE/ 270 Nm</span></p>
                        <p><span>🕐 ÉVJÁRAT:</span> <span>2020</span></p>
                        <p><span>💲 ÁR:</span> <span>—</span></p>
                        <a href="https://www.ultimatespecs.com/car-specs/Audi/146976/Audi-A5-Avant-2025-20-TFSI-e-hybrid-quattro-220kW-S-tronic.html"
                            class="btn">Bővebben</a>
                    </div>
                </div>

                <div class="card">
                    <img src="./img/audi_a6.avif" alt="Audi A6 2018–2024">
                    <div class="card-body">
                        <p><span>🚘 MODELL:</span> <span>Audi A6 C9</span></p>
                        <p><span>⚡ MOTOR:</span> <span>1984 cm³, benzin</span></p>
                        <p><span>🏁 TELJESÍTMÉNY:</span> <span>204 LE/ 340 Nm</span></p>
                        <p><span>🕐 ÉVJÁRAT:</span> <span>2025</span></p>
                        <p><span>💲 ÁR:</span> <span>—</span></p>
                        <a href="https://www.ultimatespecs.com/car-specs/Audi/153640/Audi-A6-(C9)-20-TFSI-299HP-e-hybrid-quattro.html"
                            class="btn">Bővebben</a>
                    </div>
                </div>

                <div class="card">
                    <img src="./img/audi_a7.jpg" alt="Audi A7 2018–2024">
                    <div class="card-body">
                        <p><span>🚘 MODELL:</span> <span>Audi A7 Sportback (C8)</span></p>
                        <p><span>⚡ MOTOR:</span> <span>1984 cm³, Plug-in hibrid</span></p>
                        <p><span>🏁 TELJESÍTMÉNY:</span> <span>265 LE/ 370 Nm</span></p>
                        <p><span>🕐 ÉVJÁRAT:</span> <span>2023</span></p>
                        <p><span>💲 ÁR:</span> <span>—</span></p>
                        <a href="https://www.ultimatespecs.com/car-specs/Audi/137321/Audi-A7-Sportback-(C8-2023)-50-TFSIe-quattro-S-tronic.html"
                            class="btn">Bővebben</a>
                    </div>
                </div>

                <div class="card">
                    <img src="./img/AUDI-A8-D5-TURISMO-FORGED-AV01_06-scaled.jpg" alt="audi a8 d5">
                    <div class="card-body">
                        <p><span>🚘 MODELL:</span> <span>Audi A8 D5</span></p>
                        <p><span>⚡ MOTOR:</span> <span>2995 cm³, Plug-in hibrid</span></p>
                        <p><span>🏁 TELJESÍTMÉNY:</span> <span>340 LE/ 500 Nm</span></p>
                        <p><span>🕐 ÉVJÁRAT:</span> <span>2022</span></p>
                        <p><span>💲 ÁR:</span> <span>—</span></p>
                        <a href="https://www.ultimatespecs.com/car-specs/Audi/131249/Audi-A8-2022-(D5)-60-TFSIe-quattro.html"
                            class="btn">Bővebben</a>
                    </div>
                </div>

                <div class="card">
                    <img src="./img/audi-q2-edition-1.jpg" alt="Audi Q2 2019–2024">
                    <div class="card-body">
                        <p><span>🚘 MODELL:</span> <span>Audi Q2</span></p>
                        <p><span>⚡ MOTOR:</span> <span>999 cm³, benzin</span></p>
                        <p><span>🏁 TELJESÍTMÉNY:</span> <span> 110 LE/ 200 Nm</span></p>
                        <p><span>🕐 ÉVJÁRAT:</span> <span>2021</span></p>
                        <p><span>💲 ÁR:</span> <span>—</span></p>
                        <a href="https://www.ultimatespecs.com/car-specs/Audi/109530/Audi-Q2-10-TFSI.html"
                            class="btn">Bővebben</a>
                    </div>
                </div>

                <div class="card">
                    <img src="./img/audi_q3.jpg" alt="Audi Q3 2019–2024">
                    <div class="card-body">
                        <p><span>🚘 MODELL:</span> <span>Audi Q3</span></p>
                        <p><span>⚡ MOTOR:</span> <span>1498 cm³, Enyhe benzin</span></p>
                        <p><span>🏁 TELJESÍTMÉNY:</span> <span>150 LE/250 Nm</span></p>
                        <p><span>🕐 ÉVJÁRAT:</span> <span>2026</span></p>
                        <p><span>💲 ÁR:</span> <span>—</span></p>
                        <a href="https://www.ultimatespecs.com/car-specs/Audi/149696/Audi-Q3-2026-15-TFSI-e-hybrid.html"
                            class="btn">Bővebben</a>
                    </div>
                </div>

                <div class="card">
                    <img src="./img/Audi_Q4_e-tron_2021-01@2x.jpg" alt="Audi Q4 e-tron 2021–2024">
                    <div class="card-body">
                        <p><span>🚘 MODELL:</span> <span>Audi Q4 e-tron</span></p>
                        <p><span>⚡ MOTOR:</span> <span> elektromos</span></p>
                        <p><span>🏁 TELJESÍTMÉNY:</span> <span>170 LE/ Nm</span></p>
                        <p><span>🕐 ÉVJÁRAT:</span> <span>2026</span></p>
                        <p><span>💲 ÁR:</span> <span>—</span></p>
                        <a href="https://www.ultimatespecs.com/car-specs/Audi/127421/Audi-Q4-e-tron-35.html"
                            class="btn">Bővebben</a>
                    </div>
                </div>

                <div class="card">
                    <img src="./img/Original-40038-audi-q5deansmith-015.jpg" alt="audi q5 2025">
                    <div class="card-body">
                        <p><span>🚘 MODELL:</span> <span>Audi Q5</span></p>
                        <p><span>⚡ MOTOR:</span> <span>1984 cm³, Plug-in hibrid</span></p>
                        <p><span>🏁 TELJESÍTMÉNY:</span> <span>252 LE/380 Nm</span></p>
                        <p><span>🕐 ÉVJÁRAT:</span> <span>2025</span></p>
                        <p><span>💲 ÁR:</span> <span>—</span></p>
                        <a href="https://www.ultimatespecs.com/car-specs/Audi/153630/Audi-Q5-2025-Sportback-20-TFSI-299HP-e-hybrid-quattro.html"
                            class="btn">Bővebben</a>
                    </div>
                </div>

                <div class="card">
                    <img src="./img/2025-audi-q6-e-tron-sportback-european-spec_100945138.jpg" alt="audi q6 e-tron">
                    <div class="card-body">
                        <p><span>🚘 MODELL:</span> <span>Audi Q6 e-tron</span></p>
                        <p><span>⚡ MOTOR:</span> <span>Elektromos</span></p>
                        <p><span>🏁 TELJESÍTMÉNY:</span> <span>292 LE/450 Nm</span></p>
                        <p><span>🕐 ÉVJÁRAT:</span> <span>2024</span></p>
                        <p><span>💲 ÁR:</span> <span>—</span></p>
                        <a href="https://www.ultimatespecs.com/car-specs/Audi/139355/Audi-Q6-e-tron-.html"
                            class="btn">Bővebben</a>
                    </div>
                </div>

                <div class="card">
                    <img src="./img/q7_audi.jpg" alt="Audi Q7 2019–2024">
                    <div class="card-body">
                        <p><span>🚘 MODELL:</span> <span>Audi Q7</span></p>
                        <p><span>⚡ MOTOR:</span> <span>2995 cm³, Plug-in hibrid</span></p>
                        <p><span>🏁 TELJESÍTMÉNY:</span> <span>340 LE/ 450 Nm</span></p>
                        <p><span>🕐 ÉVJÁRAT:</span> <span>2020</span></p>
                        <p><span>💲 ÁR:</span> <span>—</span></p>
                        <a href="https://www.ultimatespecs.com/car-specs/Audi/118611/Audi-Q7-2020-55-TFSI-e-Quattro.html"
                            class="btn">Bővebben</a>
                    </div>
                </div>

                <div class="card">
                    <img src="./img/P90549616-the-new-bmw-330i-sedan-exterior-05-2024-600px.jpg" alt="BMW 330i">
                    <div class="card-body">
                        <p><span>🚘 MODELL:</span> <span>BMW 330i</span></p>
                        <p><span>⚡ MOTOR:</span> <span>1998 cm³, benzin</span></p>
                        <p><span>🏁 TELJESÍTMÉNY:</span> <span>258 LE</span></p>
                        <p><span>🕐 ÉVJÁRAT:</span> <span>2024</span></p>
                        <p><span>💲 ÁR:</span> <span>—</span></p>
                        <a href="https://www.ultimatespecs.com/car-specs/BMW/151469/BMW-G20-3-Series-Sedan-LCI-330e-Auto.html"
                            class="btn">Bővebben</a>
                    </div>
                </div>

                <div class="card">
                    <img src="./img/bmw-g22-4-series-coupe-lci-muszaki-adatok-meretek-wikipedia.jpg"
                        alt="BMW G22 4-es sorozatú Coupé LCI 420i">
                    <div class="card-body">
                        <p><span>🚘 MODELL:</span> <span>BMW G22 4-es sorozatú Coupé LCI 420i</span></p>
                        <p><span>⚡ MOTOR:</span> <span>1998 cm³, benzin</span></p>
                        <p><span>🏁 TELJESÍTMÉNY:</span> <span>184 LE/ 300 Nm</span></p>
                        <p><span>🕐 ÉVJÁRAT:</span> <span>2024</span></p>
                        <p><span>💲 ÁR:</span> <span>—</span></p>
                        <a href="https://www.ultimatespecs.com/car-specs/BMW/138102/BMW-G22-4-Series-Coupe-LCI-420i.html"
                            class="btn">Bővebben</a>
                    </div>
                </div>
                <div class="card"> <img src="./img/g60-phev-stage-ext-dsk-fb.webp" alt="BMW g60">
                    <p><span>🚘 MODELL:</span> <span>BMW G60 5-ös sorozatú szedán 530e</span></p>
                    <p><span>⚡ MOTOR:</span> <span>1998 cm³,Plug-in hibrid / benzinüzemű </span></p>
                    <p><span>🏁 TELJESÍTMÉNY:</span> <span>190 LE/ 310 Nm</span></p>
                    <p><span>🕐 ÉVJÁRAT:</span> <span>2024</span></p>
                    <p><span>💲 ÁR:</span> <span>—</span></p> <a
                        href="https://www.ultimatespecs.com/car-specs/BMW/134944/BMW-G60-5-Series-Sedan-530e-Steptronic.html"
                        class="btn">Bővebben</a>
                </div>
                <div class="card"> <img
                        src="./img/P90258844-bmw-6-series-gran-turismo-630d-xdrive-luxury-line-06-2017-600px.jpg"
                        alt="BMW G32">
                    <p><span>🚘 MODELL:</span> <span>BMW G32 6-os sorozat GT Gran Turismo 630i</span></p>
                    <p><span>⚡ MOTOR:</span> <span>1998 cm³, benzin</span></p>
                    <p><span>🏁 TELJESÍTMÉNY:</span> <span> 258 LE/ 400 Nm</span></p>
                    <p><span>🕐 ÉVJÁRAT:</span> <span>2020</span></p>
                    <p><span>💲 ÁR:</span> <span>—</span></p> <a
                        href="https://www.ultimatespecs.com/car-specs/BMW/110622/BMW-G32-6-Series-GT-Gran-Turismo-630i.html"
                        class="btn">Bővebben</a>
                </div>
                <div class="card"> <img src="./img/P90333060_highRes_the-new-bmw-7-series.jpg" alt="BMW g70">
                    <p><span>🚘 MODELL:</span> <span>BMW G70 7-es sorozat 750e xDrive</span></p>
                    <p><span>⚡ MOTOR:</span> <span>2998 cm³, Plug-in hibrid / benzinüzemű</span></p>
                    <p><span>🏁 TELJESÍTMÉNY:</span> <span>310 LE/ 450 Nm</span></p>
                    <p><span>🕐 ÉVJÁRAT:</span> <span>2023</span></p>
                    <p><span>💲 ÁR:</span> <span>—</span></p> <a
                        href="https://www.ultimatespecs.com/car-specs/BMW/133485/BMW-G70-7-Series-750e-xDrive.html"
                        class="btn">Bővebben</a>
                </div>
                <div class="card"> <img
                        src="./img/P90327621-the-new-bmw-8-series-convertible-in-colour-dravit-grey-metallic-and-20-m-wheels-multi-spoke-729-m-bi-2249px.jpg"
                        alt="BMW g14">
                    <p><span>🚘 MODELL:</span> <span>BMW G14 LCI 8-as szériás kabrió 840i</span></p>
                    <p><span>⚡ MOTOR:</span> <span>2998 cm³, benzin</span></p>
                    <p><span>🏁 TELJESÍTMÉNY:</span> <span>333 LE/ 500 Nm</span></p>
                    <p><span>🕐 ÉVJÁRAT:</span> <span>2022</span></p>
                    <p><span>💲 ÁR:</span> <span>—</span></p> <a
                        href="https://www.ultimatespecs.com/car-specs/BMW/131191/BMW-G14-LCI-8-Series-Cabrio-840i.html"
                        class="btn">Bővebben</a>
                </div>
                <div class="card"> <img src="./img/bmwx10123.jpg" alt="BMW U11 X1 xDrive25e">
                    <p><span>🚘 MODELL:</span> <span>BMW U11 X1 xDrive25e</span></p>
                    <p> <span>⚡ MOTOR:</span> <span>1499 cm³, Plug-in hibrid, benzinüzemű</span> </p>
                    <p> <span>🏁 TELJESÍTMÉNY:</span> <span>136 LE/ 230 Nm</span> </p>
                    <p> <span>🕐 ÉVJÁRAT: </span> <span>2023</span> </p>
                    <p> <span>💲 ÁR: </span> <span>1.995.995</span> </p> <a
                        href="https://www.ultimatespecs.com/car-specs/BMW/137926/BMW-U11-X1-xDrive25e.html"
                        class="btn">Bővebben</a>
                </div>
                <div class="card"> <img src="./img/P90525104-the-all-new-bmw-x2-m35i-xdrive-driving-10-2023-600px.jpg"
                        alt="BMW X2 U10 M35i xDrive Steptronic DKG">
                    <p><span>🚘 MODELL:</span> <span>BMW X2 U10 M35i xDrive Steptronic DKG</span></p>
                    <p><span>⚡ MOTOR:</span> <span>1998 cm³, benzin</span></p>
                    <p><span>🏁 TELJESÍTMÉNY:</span> <span>300 LE/ 400 Nm</span></p>
                    <p><span>🕐 ÉVJÁRAT:</span> <span>2024</span></p>
                    <p><span>💲 ÁR:</span> <span>—</span></p> <a
                        href="https://www.ultimatespecs.com/car-specs/BMW/134959/BMW-X2-U10-M35i-xDrive-Steptronic-DKG.html"
                        class="btn">Bővebben</a>
                </div>
                <div class="card"> <img src="./img/P90554965-the-new-bmw-x3-m50-xdrive-dynamic-06-2024-599px.jpg"
                        alt="BMW G45 X3 30e xDrive Steptronic">
                    <p><span>🚘 MODELL:</span> <span>BMW G45 X3 30e xDrive Steptronic</span></p>
                    <p><span>⚡ MOTOR:</span> <span>1998 cm³, Plug-in hibrid / benzinüzemű</span></p>
                    <p><span>🏁 TELJESÍTMÉNY:</span> <span>190 LE/ 310 Nm</span></p>
                    <p><span>🕐 ÉVJÁRAT:</span> <span>2025</span></p>
                    <p><span>💲 ÁR:</span> <span>—</span></p> <a
                        href="https://www.ultimatespecs.com/car-specs/BMW/140569/BMW-G45-X3-30e-xDrive-Steptronic.html"
                        class="btn">Bővebben</a>
                </div>
                <div class="card"> <img src="./img/2022-G02-BMW-X4-LCI-facelift-3.jpg" alt="BMW G02 X4 LCI M">
                    <p><span>🚘 MODELL:</span> <span>BMW G02 X4 LCI M</span></p>
                    <p><span>⚡ MOTOR:</span> <span>2993 cm³, benzin</span></p>
                    <p><span>🏁 TELJESÍTMÉNY:</span> <span>480 LE/ 600 Nm</span></p>
                    <p><span>🕐 ÉVJÁRAT:</span> <span>2021</span></p>
                    <p><span>💲 ÁR:</span> <span>—</span></p> <a
                        href="https://www.ultimatespecs.com/car-specs/BMW/127932/BMW-G02-X4-LCI-M.html"
                        class="btn">Bővebben</a>
                </div>
                <div class="card"> <img src="./img/maxresdefault.jpg" alt="BMW F95 X5 M LCI M Competition">
                    <p><span>🚘 MODELL:</span> <span>BMW F95 X5 M LCI M Competition</span></p>
                    <p><span>⚡ MOTOR:</span> <span>4395 cm³, Enyhe hibrid / Benzin</span></p>
                    <p><span>🏁 TELJESÍTMÉNY:</span> <span>625 LE/ 750 Nm</span></p>
                    <p><span>🕐 ÉVJÁRAT:</span> <span>2023</span></p>
                    <p><span>💲 ÁR:</span> <span>—</span></p> <a
                        href="https://www.ultimatespecs.com/car-specs/BMW/134585/BMW-F95-X5-M-LCI-M-Competition.html"
                        class="btn">Bővebben</a>
                </div>
                <div class="card"> <img src="./img/BMW-X6-M-F96-LCI-facelift-2023.jpg"
                        alt="BMW F96 X6 M LCI M Competition">
                    <p><span>🚘 MODELL:</span> <span>BMW F96 X6 M LCI M Competition</span></p>
                    <p><span>⚡ MOTOR:</span> <span>4395 cm³, Enyhe hibrid / Benzin</span></p>
                    <p><span>🏁 TELJESÍTMÉNY:</span> <span>625 LE/ 750 Nm</span></p>
                    <p><span>🕐 ÉVJÁRAT:</span> <span>2023</span></p>
                    <p><span>💲 ÁR:</span> <span>—</span></p> <a
                        href="https://www.ultimatespecs.com/car-specs/BMW/134586/BMW-F96-X6-M-LCI-M-Competition.html"
                        class="btn">Bővebben</a>
                </div>
                <div class="card"> <img src="./img/body-kit-for-bmw-x7-g07-lci-upgrade-to-m60i-style-n-_3.webp"
                        alt="BMW X7 G07 LCI M60i">
                    <p><span>🚘 MODELL:</span> <span>BMW X7 G07 LCI M60i</span></p>
                    <p><span>⚡ MOTOR:</span> <span>4395 cm³, Enyhe benzin</span></p>
                    <p><span>🏁 TELJESÍTMÉNY:</span> <span>530 LE/ 750 Nm</span></p>
                    <p><span>🕐 ÉVJÁRAT:</span> <span>2025</span></p>
                    <p><span>💲 ÁR:</span> <span>—</span></p> <a
                        href="https://www.ultimatespecs.com/car-specs/BMW/136971/BMW-X7-G07-LCI-M60i.html"
                        class="btn">Bővebben</a>
                </div>

            </div>
        </div>
    </main>
@endsection

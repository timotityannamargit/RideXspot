@extends('layout')

@push('pages')
    <link rel="stylesheet" href="{{ asset('css/szolgaltatasok.css') }}">
@endpush

@section('content')
<main class="main">

    <section class="hero">
        <div class="hero-inner wrap">
            <div class="hero-text">
                
                <h1>Ott kezdődik az autód szíve, ahol a mi munkánk indul.</h1>
                <p class="lead">
                    Ismerd meg szervizünk szolgáltatásait — megbízható, precíz és professzionális ellátás.
                </p>
            </div>
        </div>
    </section>

    <section class="cards wrap" id="szolgaltatasok">
        <h2 class="section-title">Szerviz szolgáltatások</h2>

        <div class="grid">

            <article class="card">
                <div class="card-icon"><i data-lucide="wrench"></i></div>
                <h3>Motor & hajtás</h3>
                <ul>
                    <li><strong>Teljes körű motorvizsgálat</strong><p>Kompressziómérés, olajszivárgás ellenőrzés, hibakódok kiolvasása, általános állapotfelmérés</p></li>
                    <li><strong>Szívó- és kipufogórendszer javítás</strong><p>EGR szelep tisztítás/csere, turbó ellenőrzés, kipufogó szivárgások javítása</p></li>
                    <li><strong>Tuning & teljesítményhangolás</strong><p>ECU optimalizálás (chiptuning), fogyasztás vs. teljesítmény finomhangolás</p></li>
                </ul>
            </article>

            <article class="card">
                <div class="card-icon"><i data-lucide="disc"></i></div>
                <h3>Fék & futómű</h3>
                <ul>
                    <li><strong>Fékbetét és tárcsa csere</strong><p>Kopott alkatrészek cseréje, fékhatás ellenőrzés</p></li>
                    <li><strong>Lengéscsillapító és futómű beállítás</strong><p>Stabilitás javítása, kopások megszüntetése</p></li>
                    <li><strong>Kerekek centrírozása</strong><p>Vibráció megszüntetése nagyobb sebességnél</p></li>
                </ul>
            </article>

            <article class="card">
                <div class="card-icon"><i data-lucide="cpu"></i></div>
                <h3>Diagnosztika</h3>
                <ul>
                    <li><strong>OBD hibakód olvasás</strong><p>Számítógépes hibák gyors feltárása</p></li>
                    <li><strong>Elektronikai hibakeresés</strong><p>ABS, ESP, légzsák rendszerek ellenőrzése</p></li>
                    <li><strong>Szenzorok vizsgálata</strong><p>Lambda szonda, gyújtás és egyéb hibák feltárása</p></li>
                </ul>
            </article>

            <article class="card">
                <div class="card-icon"><i data-lucide="zap"></i></div>
                <h3>Elektromos rendszerek</h3>
                <ul>
                    <li><strong>Akkumulátor csere és töltés</strong><p>Állapotfelmérés, töltőrendszer ellenőrzés</p></li>
                    <li><strong>Indítási problémák javítása</strong><p>Önindító, generátor hibák kezelése</p></li>
                    <li><strong>Elektromos diagnosztika</strong><p>Kábelezési hibák, kontakt problémák feltárása</p></li>
                </ul>
            </article>

            <article class="card">
                <div class="card-icon"><i data-lucide="settings"></i></div>
                <h3>Tuning & kiegészítők</h3>
                <ul>
                    <li><strong>Személyre szabott tuning</strong><p>Külső/belső módosítások, teljesítmény növelés</p></li>
                    <li><strong>Alkatrész beszerzés és beszerelés</strong><p>Gyári vagy utángyártott elemek</p></li>
                    <li><strong>Általános karbantartás</strong><p>Olajcsere, szűrők, folyadékok cseréje</p></li>
                </ul>
            </article>

            <article class="card">
                <div class="card-icon"><i data-lucide="circle-dot"></i></div>
                <h3>Gumi & kerekek</h3>
                <ul>
                    <li><strong>Kerék kiegyensúlyozás</strong><p>Szezonális (nyári/téli) átszerelés</p></li>
                    <li><strong>Gumi csere, centrírozás</strong><p>Egyenletes kopás biztosítása</p></li>
                    <li><strong>SUV kerekek kezelése</strong><p>Nagyobb méretű kerekek szakszerű szerelése</p></li>
                </ul>
            </article>

        </div>
    </section>

    <section class="issues wrap">
        <h2 class="section-title">Gyakori hibajelenségek</h2>

        <div class="issues-grid">
            @foreach ($issues as $issue)
                <div class="issue">
                    <svg class="issue-icon">
                        <use href="{{ $issue->icon }}"></use>
                    </svg>
                    <p>{{ $issue->name }}</p>
                </div>
            @endforeach

            <div class="issue"><p>Fék kopás, zajok és fékhatás csökkenés</p></div>
            <div class="issue"><p>Kuplung csúszik vagy recseg</p></div>
            <div class="issue"><p>Motor egyenetlen járás, túlmelegedés</p></div>
            <div class="issue"><p>Check engine világít / hibakódok</p></div>
        </div>
    </section>

    <section class="contact wrap">
        <h2 class="section-title">Látogass el hozzánk</h2>
        <p class="muted">Cím: Budapest — időpont egyeztetés a honlapon keresztül.</p>

        <a class="cta" href="{{ route('booking') }}#foglalas">
            Időpont foglalás
        </a>
    </section>

</main>
@endsection
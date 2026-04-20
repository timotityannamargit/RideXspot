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

                @foreach ($services as $service)
                    <article class="card">
                        <div class="card-icon">
                            <i data-lucide="{{ $service->icon }}"></i>
                        </div>

                        <h3>{{ $service->name }}</h3>

                        <ul>
                            @foreach ($service->labels as $label)
                                <li>
                                    <strong>{{ $label->content }}</strong>
                                    <p>{{ $label->sub_content }}</p>
                                </li>
                            @endforeach
                        </ul>
                    </article>
                @endforeach

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

                <div class="issue">
                    <p>Fék kopás, zajok és fékhatás csökkenés</p>
                </div>
                <div class="issue">
                    <p>Kuplung csúszik vagy recseg</p>
                </div>
                <div class="issue">
                    <p>Motor egyenetlen járás, túlmelegedés</p>
                </div>
                <div class="issue">
                    <p>Check engine világít / hibakódok</p>
                </div>
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

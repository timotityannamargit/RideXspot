@extends('layout')

@push('pages')
    <link rel="stylesheet" href="{{ asset('css/kapcsolat.css') }}">
@endpush

@section('content')

    <main class="kapcsolat-section" role="main" aria-labelledby="kapcsolat-heading">
        <div class="container">
            <aside class="left">
                <h1 id="kapcsolat-heading" class="huge-title">KAPCSOLAT</h1>
                <p>Keress minket bizalommal!
                    Ezen a felületen azokat az autókat találja, amelyikre bérlési lehetőség van, de ha egyedi igényei vannak, vagy nem találja a keresett modellt, kérjük, vegye fel velünk a kapcsolatot.
                    Szívesen segítünk személyre szabott ajánlatokkal és megoldásokkal, hogy megtalálja a tökéletes autót az Ön igényeihez.
                </p>

                
            </aside>

            <figure class="right" aria-hidden="true">
            </figure>
        </div>
    </main>
@endsection

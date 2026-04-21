@extends("layout")

@push('pages')
    <link rel="stylesheet" href="{{ asset('css/partnereink.css') }}">
@endpush

@section('content')

<main class="partnereink-section" role="main" aria-labelledby="partnereink-heading">
    <div class="container">
        <aside class="left">
            <h1 id="partnereink-heading" class="huge-title"> PARTNEREINK</h1>

            <div class="content">
                <p class="lead">Büszkék vagyunk szakmai kapcsolatainkra.</p>
                <p>Az alábbi partnereinkkel szorosan együttműködve biztosítjuk a legmagasabb minőséget:</p>

                <table class="partner-table">
                    <thead>
                        <tr>
                            <th>Partner neve</th>
                            <th>Tevékenység</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><span class="partner-name">DriveMaster Szerviz</span></td>
                            <td>Márkafüggetlen szerviz és karbantartás</td>
                        </tr>
                        <tr>
                            <td><span class="partner-name">AutoTech Szerviz</span></td>
                            <td>Alkatrész forgalmazás</td>
                        </tr>
                        <tr>
                            <td><span class="partner-name">GearUp Auto</span></td>
                            <td>Szerszám kereskedelem</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </aside>

        <figure class="right" aria-hidden="true">
            {{-- Ide betehetsz egy autós képet vagy partner logókat --}}
        </figure>
    </div>
</main>
@endsection

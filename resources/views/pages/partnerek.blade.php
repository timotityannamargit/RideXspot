@extends("layout")

@push('pages')
    <link rel="stylesheet" href="{{ asset('css/partnereink.css') }}">
@endpush

@section('content')

<main class="partnereink-section" role="main" aria-labelledby="partnereink-heading">
    <div class="container">
        <aside class="left">
            <h1 id="partnereink-heading" class="huge-title">TOVÁBBI PARTNEREINK</h1>

            <div class="content">
                <p>Büszkék vagyunk arra, hogy együtt dolgozhatunk az alábbi partnereinkkel:</p>

                <table class="partner-table">
    <thead>
        <tr>
            <th>Partner neve</th>
            <th>Tevékenység</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>DriveMaster Szerviz</td>
            <td>Márkafüggetlen szerviz és karbantartás</td>
        </tr>
        <tr>
            <td>AutoTech Szerviz</td>
            <td>Alkatrész forgalmazás</td>
        </tr>
        <tr>
            <td>GearUp Auto</td>
            <td>Szerszám kereskedelem</td>
        </tr>
       
    </tbody>
</table>

                

                
            </div>
        </aside>

        <figure class="right" aria-hidden="true">
            <!-- Ide kerülhet partner logókat tartalmazó kép vagy grafika -->
        </figure>
    </div>
</main>
@endsection

@extends('layout')

@push('pages')
    <link rel="stylesheet" href="{{ asset('css/kapcsolat.css') }}">
@endpush

@section('content')

    <main class="kapcsolat-section" role="main" aria-labelledby="kapcsolat-heading">
        <div class="container">
            <aside class="left">
                <h1 id="kapcsolat-heading" class="huge-title">KAPCSOLAT</h1>
                <p>Keress minket bizalommal!</p>

                
            </aside>

            <figure class="right" aria-hidden="true">
            </figure>
        </div>
    </main>
@endsection

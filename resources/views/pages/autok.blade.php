@extends('layout')

@push('pages')
    <link rel="stylesheet" href="{{ asset('css/autok.css') }}">
@endpush

@section('content')
    <main class="autok-section" role="main" aria-labelledby="autok-heading">
        <div class="container">

            <h1 id="autok-heading" class="huge-title">AUTÓINK</h1>

            <div class="cars-grid">

                @foreach ($cars as $car)
                    <div class="card">
                        <img src="{{ asset($car->img) }}" alt="{{ Str::slug($car->model) }}">

                        <div class="card-body">
                            <p><span>🚘 MODELL:</span> <span>{{ $car->model }}</span></p>

                            <p>
                                <span>⚡ MOTOR:</span>
                                <span>
                                    @if ($car->motor_cc > 0)
                                        {{ $car->motor_cc }} cm³,
                                    @endif
                                    {{ $car->motor_type }}
                                </span>
                            </p>

                                <span>🏁 TELJESÍTMÉNY:</span>
                                <span>
                                    {{ $car->horsepower }} LE
                                    @if ($car->torque > 0)
                                        / {{ $car->torque }} Nm
                                    @endif
                                </span>
                            </p>

                            <p><span>🕐 ÉVJÁRAT:</span> <span>{{ $car->year }}</span></p>
                            <a href="{{ $car->link }}" class="btn" target="_blank">Bővebben</a>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="pagination-wrapper d-flex justify-content-center mt-5">
                {{ $cars->links() }}
            </div>
        </div>
    </main>
@endsection

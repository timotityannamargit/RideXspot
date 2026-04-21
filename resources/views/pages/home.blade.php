@extends("layout")
@push('pages')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endpush

@section('content')

@if (session('success'))
    <script>
        alert("{{ session('success') }}");
    </script>
@endif

<section class="hero">
    <div class="hero-image"></div>
    <div class="hero-content">
      <h4>RideXspot ZRT.</h4>
      <h1>AUTÓBÉRLÉS - <br>BIZTOSÍTÁS, KÁRRENDEZÉS, ASSISTANCE</h1>

      <div class="buttons">
        <a href="{{ route('booking') }}#foglalas" class="btn">Időpont foglalás →</a>
      </div>

      <div class="stats">
        <div class="stat">
          <p>100%-ban magyar tulajdonú cég</p>
        </div>
        <div class="stat">
          <p>Gépjármű-kereskedői és -flottakezelési tapasztalat</p>
        </div>
        <div class="stat">
          <p>Lefedettség szerviz- és márkakereskedői fronton</p>
          <p class="stat-number">Országos</p>
        </div>
      </div>
    </div>
</section>
@endsection
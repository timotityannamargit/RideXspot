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
<p>Description</p>
</div>
</td>

<td>
<div class="card">
<img src="./img/audi_a5.jpg">
<h3>Audi a5</h3>
<p>Description</p>
</div>
</td>

<td>
<div class="card">
<img src="./img/audi_a6.avif">
<h3>Audi a6</h3>
<p>Description</p>
</div>
</td>

<td>
<div class="card">
<img src="./img/audi_a7.jpg">
<h3>Audi a7</h3>
<p>Description</p>
</div>
</td>
</tr>

<tr>
<td><div class="card"><img src="./img/audirs4.jpg"><h3>Audi rs4</h3></div></td>
<td><div class="card"><img src="./img/audirs5.jpg"><h3>Audi rs5</h3></div></td>
<td><div class="card"><img src="./img/audirs6.jpg"><h3>Audi rs5</h3></div></td>
<td><div class="card"><img src="./img/audirs7.webp"><h3>Audi rs7</h3></div></td>
</tr>

<tr>
<td><div class="card"><img src="./img/audi-q8-landing2-1-scaled.jpg"><h3>Audi q8</h3></div></td>
<td><div class="card"><img src="./img/bmw_330e_hybrid.jpg"><h3>Bmw 330e</h3></div></td>
<td><div class="card"><img src="./img/bmw_520_2022.jpg"><h3>Bmw 520d</h3></div></td>
<td><div class="card"><img src="./img/bmw_xdrive_520d.jpg"><h3>Bmw xdrive 520d</h3></div></td>
</tr>

<tr>
<td><div class="card"><img src="./img/bmw4_cabrio.jpg"><h3>Bmw 4 cabrio</h3></div></td>
<td><div class="card"><img src="./img/BMW-Z4-2009-2017.jpg"><h3>Bmw Z4</h3></div></td>
<td><div class="card"><img src="./img/image.webp"><h3>Bmw e46</h3></div></td>
<td><div class="card"><img src="./img/06.jpg"><h3>Bmw e36</h3></div></td>
</tr>

</table>
    </main>
@endsection

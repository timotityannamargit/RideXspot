@props(['route', 'label'])

@php
    $class = Route::is($route) ? 'active' : '';
@endphp
<li class="nav-item">
    <a href="{{ route($route) }} " class="nav-link {{ $class }}">
        {{ $label }}
    </a>
</li>
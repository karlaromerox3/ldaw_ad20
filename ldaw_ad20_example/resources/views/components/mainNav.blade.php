@php

// php me permite insertar bloques de código en PHP

function getClass($url){

    $regExp = "/" . str_replace("/", "\\/", $url) . "(\/|$)/";
    $classes = [];
    $classes[] = preg_match($regExp, "/" . request()->path()) ? "active" : "";

    return trim(implode(" ", $classes));
    
}

@endphp


<nav class="container-fluid">
    <ul class="row">
        <li class="col"><a href="{{ url('/catalogo') }}" class="{{ getClass('/catalogo') }}">Catálogo</a></li>
        <li class="col"><a href="{{ route('prest') }}" class="{{ getClass('/prestamos') }}">Registro de Préstamos</a></li>
        <li class="col"><a href="{{ url('/mis-prestamos') }}" class="{{ getClass('/mis-libros') }}">Mis Préstamos</a></li>
    </ul>
</nav>

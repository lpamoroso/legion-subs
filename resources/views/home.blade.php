@extends('layouts.app')

@section('content')

<div class="container">
    @foreach ($subtitulos as $subtitulo)
        <div class="card w-75 m-auto mb-3">
            <div class="card-body">
                <h5 class="card-title">{{ $subtitulo->nombre }}</h5>
                <h6 class="card-subtitle mb-2 text-muted">Subido el 27/12/2021</h6>
                <p class="card-text">{{ $subtitulo->descripcion }}</p>
                <a href="#" class="card-link">Bajar subtítulo</a>
                <a href="#" class="card-link">Ver más información</a>
            </div>
        </div>
    @endforeach

    <div class="d-flex justify-content-center">
        {{ $subtitulos->links() }}
    </div>
</div>

@endsection

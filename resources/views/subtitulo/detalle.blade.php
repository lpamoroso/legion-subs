@extends('layouts.app')

@section('content')

<div class="container">
        <div class="card w-75 m-auto mb-3">
                <div class="card-body">
                        <h5 class="card-title">{{ $subtitulo->nombre }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Subido el {{ $subtitulo->created_at }} por {{ $subtitulo->name }}</h6>
                        <p class="card-text">{{ $subtitulo->descripcion }}</p>
                        <a href="#" class="card-link">Bajar subtítulo</a>
                </div>
        </div>
</div>

@endsection

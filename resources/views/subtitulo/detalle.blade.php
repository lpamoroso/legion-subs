@extends('layouts.app')

@section('content')

<div class="container">
        <div class="card w-75 m-auto mb-3">
                <div class="card-body">
                        <h5 class="card-title">{{ $subtitulo->nombre }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Subido el {{ $subtitulo->created_at }} por {{ $subtitulo->name }}</h6>
                        <p class="card-text">{{ $subtitulo->descripcion }}</p>

                        <p class="card-text">Cantidad de descargas: {{ $subtitulo->cantidad_descargas }}</p>

                        <a href="#" class="btn btn-success" role="button">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"><path d="M18 15l-6-6-6 6"/></svg>
                                {{ $subtitulo->cantidad_upvotes }}
                        </a>
                        <a href="#" class="btn btn-danger" role="button">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"><path d="M6 9l6 6 6-6"/></svg>
                                {{ $subtitulo->cantidad_downvotes }}
                        </a>

                        <div class="container">
                                <div class="row mt-3">
                                        <a href="{{ Storage::url($subtitulo->nombre.'.srt') }}" class="btn btn-secondary col-2" role="button">Bajar subtítulo</a>
                                </div>
                        </div>
                </div>
        </div>
</div>

@endsection

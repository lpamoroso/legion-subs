@extends('layouts.app')

@push('head')
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-switch/3.3.2/js/bootstrap-switch.min.js"></script>
        <script src="{{ asset('js/criticas.js')}}"></script>
@endpush

@section('content')

<div class="container">
        <h2>Mis críticas</h2>
        <hr>
        <div class="card w-75 m-auto mb-3">
                <div class="card-body">
                        <div class="row">
                                <h5 class="card-title mt-2 col-10">Subtitulo 1</h5>

                                <a class="btn shadow-none col-2" data-bs-toggle="collapse" href="#critica-body" role="button" aria-expanded="false" aria-controls="critica-body">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 9l6 6 6-6"/></svg>
                                </a>

                                <div class="collapse mt-3" id="critica-body">
                                        <form action="" method="post">
                                                <div class="form-check form-switch mb-4">
                                                        <input class="form-check-input" type="checkbox" name="sub-util" id="sub-util" onclick="switchContent()">
                                                        <label class="form-check-label" for="sub-util">¿Sirvió para la película?</label>
                                                </div>
                                                <div id="input-nombre-pelicula" class="mb-4 row" style="display: none">
                                                        <label for="titulo_pelicula" class="col-sm-2 col-form-label">Título de la película</label>
                                                        <div class="col-sm-10">
                                                                <input type="text" class="form-control" id="titulo_pelicula" placeholder="Procurá copiar y pegar el nombre del archivo">
                                                        </div>
                                                </div>
                                                <button class="btn btn-secondary" type="submit">Calificar</button>
                                        </form>
                                </div>
                        </div>
                </div>
        </div>
</div>

@endsection

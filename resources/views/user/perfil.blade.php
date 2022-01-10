@extends('layouts.app')

@section('content')

{{-- {{ CountryFlag::get('NL') }} para compartir los codigos de banderas --}}

<div class="container">
    <div class="d-flex justify-content-center">
        <div class="card w-75">
            <div class="card-body">
                <h2>Editar mis datos</h2>
                <hr>
                <form action="{{ route('edit_profile') }}" method="post">
                    @csrf
                    <div class="mb-3 row">
                        <label for="name" class="col-sm-2 col-form-label">Nombre de usuario</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" name="name" value="{{ Auth::user()->name }}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="email" name="email" value="">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="password" class="col-sm-2 col-form-label">Contraseña</label>
                        <div class="col-sm-10">
                            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" value="">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <button type="submit" class="btn btn-secondary">Editar datos</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

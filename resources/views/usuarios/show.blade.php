@extends('layouts.admin')

@section('main-content')
    <div class="container-fluid">
        <h1 class="h3 mb-4 text-gray-800">{{ __('Detalles del Usuario') }}</h1>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ __('Nombre') }}</h5>
                <p class="card-text">{{ $usuario->nombre }}</p>

                <h5 class="card-title">{{ __('Apellido Paterno') }}</h5>
                <p class="card-text">{{ $usuario->apellido1 }}</p>

                <h5 class="card-title">{{ __('Apellido Materno') }}</h5>
                <p class="card-text">{{ $usuario->apellido2 }}</p>

                <h5 class="card-title">{{ __('Edad') }}</h5>
                <p class="card-text">{{ $usuario->edad }}</p>

                <h5 class="card-title">{{ __('Correo Electronico') }}</h5>
                <p class="card-text">{{ $usuario->email }}</p>
            </div>
        </div>
    </div>
@endsection

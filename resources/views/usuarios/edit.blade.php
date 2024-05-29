@extends('layouts.admin')

@section('main-content')
    <div class="container-fluid">
        <h1 class="h3 mb-4 text-gray-800">{{ __('Editar Persona') }}</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('usuarios.update', $usuario->id) }}">
            @csrf
            @method('PUT')
            <div class="form-group">
                    <label for="nombre">{{ __('Nombre') }}</label>
                    <input type="text" name="nombre" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="apellido1">{{ __('Apellido Paterno') }}</label>
                    <input type="text" name="apellido1" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="apellido2">{{ __('Apellido Materno') }}</label>
                    <input type="text" name="apellido2" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="edad">{{ __('Edad') }}</label>
                    <input type="int" name="edad" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="email">{{ __('Correo Electronico') }}</label>
                    <input type="email" name="email" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
        </form>
    </div>
@endsection

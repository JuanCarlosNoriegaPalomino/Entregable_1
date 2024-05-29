@extends('layouts.admin')

@section('main-content')
    <div class="container-fluid">
        <h1 class="h3 mb-4 text-gray-800">{{ __('Agregar Persona') }}</h1>

        <div class="card shadow mb-4">
            <div class="card-body">
                <form action="{{ route('usuarios.store') }}" method="POST">
                    @csrf
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
        </div>
    </div>
@endsection

@extends('layouts.app')

@section('content')
    <div class="col-md-4 offset-md-4">
        <div class="card">
            <div class="card-header">
                <h3>Registrate</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('register') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Nombres</span>
                        </div>
                        <input type="text" name="name" class="form-control @error('password') is-invalid @enderror" placeholder="Nombres" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Apellidos</span>
                        </div>
                        <input type="text" name="surname" class="form-control @error('password') is-invalid @enderror" placeholder="Apellidos" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Email</span>
                        </div>
                        <input type="text" name="email" class="form-control @error('password') is-invalid @enderror" placeholder="Correo" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Dirección</span>
                        </div>
                        <textarea name="direction" class="form-control @error('password') is-invalid @enderror"></textarea>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Clave</span>
                        </div>
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Clave" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <button class="btn btn-outline-success btn-block">Enviar</button>
                </form>
            </div>
        </div>
    </div>
@endsection
@extends('layouts.app')

@section('content')
<div class="col-md-4 offset-md-4">
    <div class="card">
        <div class="card-header">
            <h3>Ingresar</h3>
        </div>
        <div class="card-body">
            <form action="" method="POST">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1">Email</span>
                    </div>
                    <input type="text" name="email" class="form-control" placeholder="Correo" aria-label="Username" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1">Clave</span>
                    </div>
                    <input type="text" name="password" class="form-control" placeholder="Clave" aria-label="Username" aria-describedby="basic-addon1">
                </div>
                <button class="btn btn-outline-success btn-block">Ingresar</button>
            </form>
            @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
            @endif
        </div>
    </div>
</div>
@endsection


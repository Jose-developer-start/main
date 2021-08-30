@extends('layouts.app')

@section('content')
<div class="col-md-4 offset-md-4 my-4">
    <div class="card">
        <div class="card-header">
            <h3>Ingresar</h3>
        </div>
        <div class="card-body">
            <form action="" method="POST">
                @csrf
                <div class="mb-3">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Email</span>
                        </div>
                        <input type="text" name="email" class="form-control @error('password') is-invalid @enderror" placeholder="Correo" value="{{ old('email') }}" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    {!! $errors->first('email','<span class="error">:message</span>') !!}
                </div>
                <div class="mb-3">
                    <div class="input-group">
                        <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Clave</span>
                        </div>
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Clave" value="{{ old('password') }}" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    {!! $errors->first('password','<span class="error">:message</span>') !!}
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


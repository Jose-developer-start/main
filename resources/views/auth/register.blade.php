@extends('layouts.app')

@section('content')
    <div class="col-md-4 offset-md-4 my-4">
        <div class="card">
            <div class="card-header">
                <h3>Registrate</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('register') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="mb-3">
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Nombres</span>
                            </div>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Nombres" value="{{ old('name') }}" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        {!! $errors->first('name','<span class="error">:message</span>') !!}
                    </div>
                    <div class="mb-3">
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Apellidos</span>
                            </div>
                            <input type="text" name="surname" class="form-control @error('surname') is-invalid @enderror" placeholder="Apellidos" value="{{ old('surname') }}" aria-label="Username" aria-describedby="basic-addon1">
                            
                        </div>
                        {!! $errors->first('surname','<span class="error">:message</span>') !!}
                    </div>
                    <div class="mb-3">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Email</span>
                            </div>
                            <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Correo" value="{{ old('email') }}" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        {!! $errors->first('email','<span class="error">:message</span>') !!}
                    </div>
                    <div class="mb-3">
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Dirección</span>
                            </div>
                            <textarea name="direction" class="form-control @error('direction') is-invalid @enderror">{{ old('direction') }}</textarea>
                        </div>
                        {!! $errors->first('direction','<span class="error">:message</span>') !!}
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
                    <button class="btn btn-outline-success btn-block">Enviar</button>
                </form>
            </div>
        </div>
    </div>
@endsection
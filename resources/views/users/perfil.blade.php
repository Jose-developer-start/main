@extends('layouts.app')

@section('title','Mi perfil')

@section('content')

    <div class="container">
        <div class="jumbotron">
            <h1>Hola, {{ Auth::user()->name }}, bienvenido a tu perfil</h1>
            <p>Actualiza tú información de forma rápida</p>
            <hr>

            <div class="row">
                <div class="col-sm-12 col-md-4">
                    <div class="d-flex justify-content-center">
                        @if(empty(Auth::user()->photo))
                        
                        <img class="img-fluid" width="220" src="{{ asset('images/avatar-perfil.png')}}" alt="foto-perfil">
                        @else
                        <img class="img-fluid" width="220" src="{{ asset('storage/'.Auth::user()->photo) }}" alt="foto-perfil">
                        @endif
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <h2>Informacion personal</h2>
                    <p><b>Nombre: </b>{{ Auth::user()->name }}</p>
                    <p><b>Apellido: </b>{{ Auth::user()->surname }}</p>
                    <p><b>Email: </b>{{ Auth::user()->email }}</p>
                    <p><b>Celular: </b>{{ Auth::user()->phone }}</p>
                    <p><b>Dirección: </b>{{ Auth::user()->direction }}</p>
                    
                </div>
                <div class="col-sm-12 col-md-4">
                    <h2>Tus ultimas compras</h2>
                    @forelse ($sales as $sale)
                        <p><b>Fecha de compra: </b>{{ date("d-m-Y", strtotime($sale->date)) }}</p>
                    @empty
                        <h5>No hay compras realizadas</h5>
                    @endforelse
                    <a href="{{ route('reporte.index') }}" class="btn btn-outline-info">Ver compras <i class="far fa-eye"></i></a>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <hr>
                    <h2>Actualiza tu información</h2>
                    <div class="card">
                        <div class="card-header">
                            <h3>Registrate</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('perfil.update',Auth::user()->id) }}" method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                {{ method_field('PUT') }}
                                <div class="mb-3">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">Nombres</span>
                                        </div>
                                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Nombres" value="{{ old('name',Auth::user()->name) }}" aria-label="Username" aria-describedby="basic-addon1">
                                    </div>
                                    {!! $errors->first('name','<span class="error">:message</span>') !!}
                                </div>
                                <div class="mb-3">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">Apellidos</span>
                                        </div>
                                        <input type="text" name="surname" class="form-control @error('surname') is-invalid @enderror" placeholder="Apellidos" value="{{ old('surname',Auth::user()->surname) }}" aria-label="Username" aria-describedby="basic-addon1">
                                        
                                    </div>
                                    {!! $errors->first('surname','<span class="error">:message</span>') !!}
                                </div>
                                <div class="mb-3">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">Email</span>
                                        </div>
                                        <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Correo" value="{{ old('email',Auth::user()->email) }}" aria-label="Username" aria-describedby="basic-addon1">
                                    </div>
                                    {!! $errors->first('email','<span class="error">:message</span>') !!}
                                </div>

                                <div class="mb-3">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">Celular</span>
                                        </div>
                                        <input type="number" name="phone" class="form-control @error('phone') is-invalid @enderror" placeholder="número teléfonico" value="{{ old('email',Auth::user()->phone) }}" aria-label="Username" aria-describedby="basic-addon1">
                                    </div>
                                    {!! $errors->first('phone','<span class="error">:message</span>') !!}
                                </div>

                                <div class="mb-3">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">Dirección</span>
                                        </div>
                                        <textarea name="direction" class="form-control @error('direction') is-invalid @enderror">{{ old('direction',Auth::user()->direction) }}</textarea>
                                    </div>
                                    {!! $errors->first('direction','<span class="error">:message</span>') !!}
                                </div>
                                <div class="mb-3">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">Foto</span>
                                        </div>
                                        <input type="file" name="photo" class="form-control">
                                    </div>
                                    {!! $errors->first('photo','<span class="error">:message</span>') !!}
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
                                <button class="btn btn-outline-success btn-block">Actualizar</button>
                            </form>
                        </div>
                    </div>
            </div>
        </div>
        
    </div>

@endsection
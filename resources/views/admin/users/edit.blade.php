@extends('admin.layout')

@section('title','Productos/Agregar')

@section('content')
<main class="app-content">
  <div class="app-title">
    <div>
      <h1><i class="fa fa-th-list"></i> Usuario</h1>
      <p>Actualiza tus datos</p>
    </div>
    <ul class="app-breadcrumb breadcrumb side">
      <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
      <li class="breadcrumb-item">Usuario</li>
      <li class="breadcrumb-item active"><a href="#">Editar</a></li>
    </ul>
  </div>
  @include('admin.partials.notify')
  <div class="row">
    <div class="col-md-12">
      <div class="tile">
        <form class="text-center" action="{{ route('user.update',$user) }}" method="POST" enctype="multipart/form-data">
          @csrf @method('PUT')
          @include('admin.users._form')
          <div class="tile-footer">
            <button class="btn btn-primary" type="submit">Actualizar</button>
            <a href="{{ route('user.index') }}" class="btn btn-outline-danger">Cancelar</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</main>
@endsection
    
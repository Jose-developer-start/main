@extends('admin.layout')

@section('title','Productos/Agregar')

@section('content')
<main class="app-content">
  <div class="app-title">
    <div>
      <h1><i class="fa fa-th-list"></i> Productos</h1>
      <p>Table to display analytical data effectively</p>
    </div>
    <ul class="app-breadcrumb breadcrumb side">
      <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
      <li class="breadcrumb-item">Producto</li>
      <li class="breadcrumb-item active"><a href="#">Crear</a></li>
    </ul>
  </div>
  @include('admin.partials.notify')
  <div class="row">
    <div class="col-md-12">
      <div class="tile">
        <form action="{{ route('product.update',$product) }}" method="POST" enctype="multipart/form-data">
          @csrf @method('PUT')
          @include('admin.product._form')
          <div class="tile-footer">
            <button class="btn btn-primary" type="submit">Actualizar</button>
            <a href="{{ route('product.index') }}" class="btn btn-outline-danger">Cancelar</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</main>
@endsection
    
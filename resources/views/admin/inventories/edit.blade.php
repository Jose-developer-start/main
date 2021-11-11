@extends('admin.layout')

@section('title','Inventario/Agregar')

@section('content')
<main class="app-content">
  <div class="app-title">
    <div>
      <h1><i class="fa fa-th-list"></i> Inventario</h1>
      <p>Actualiza el producto su existencia en el sistema</p>
    </div>
    <ul class="app-breadcrumb breadcrumb side">
      <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
      <li class="breadcrumb-item">Inventario</li>
      <li class="breadcrumb-item active"><a href="#">Editar</a></li>
    </ul>
  </div>
  @include('admin.partials.notify')
  <div class="row">
    <div class="col-md-12">
      <div class="tile">
        <h3>Producto: @foreach ($inventario->products as $item)
            {{ $item->name }}
        @endforeach</h3>
        <form action="{{ route('inventario.update',$inventario) }}" method="POST" enctype="multipart/form-data">
          @csrf @method('PUT')
          @include('admin.inventories._form')
          <div class="tile-footer">
            <button class="btn btn-primary" type="submit">Actualizar</button>
            <a href="{{ route('inventario.index') }}" class="btn btn-outline-danger">Cancelar</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</main>
@endsection
    
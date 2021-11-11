@extends('admin.layout')

@section('title','Marcas/Agregar')

@section('content')
<main class="app-content">
  <div class="app-title">
    <div>
      <h1><i class="fa fa-th-list"></i> Marcas</h1>
      <p>Table to display analytical data effectively</p>
    </div>
    <ul class="app-breadcrumb breadcrumb side">
      <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
      <li class="breadcrumb-item">Marcas</li>
      <li class="breadcrumb-item active"><a href="{{route('brands.index_brands') }} ">Marcas</a></li>
    </ul>
  </div>
  @include('admin.partials.notify')
  <div class="row ">
    <div class="col-md-12">
      <div class="tile ">
        <form class="text-center" style="" action="{{ route('brands.store') }}" method="POST" enctype="multipart/form-data">
          @csrf
          @include('admin.brands._form_brands')
          <div class="tile-footer m-5 ">
            <button class="btn btn-primary" type="submit">Agregar Marca</button>
        </div>
        </form>
      </div>
    </div>
  </div>
</main>
@endsection
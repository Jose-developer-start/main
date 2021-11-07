@extends('admin.layout')

@section('title','ver información de la venta')

@section('content')
<main class="app-content">
  <div class="app-title">
    <div>
      <h1><i class="fa fa-th-list"></i> Información del pago realizado</h1>
      <p>Gestiona las ventas y información</p>
    </div>
    <ul class="app-breadcrumb breadcrumb side">
      <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
      <li class="breadcrumb-item">Menu</li>
      <li class="breadcrumb-item active"><a href="#">ventas</a></li>
    </ul>
  </div>
  @include('admin.partials.notify')
  <div class="row">
    <div class="col-md-12">
      <div class="tile">
          @foreach ($result as $key)
          
          <div class="d-flex justify-content-between mb-4">
            <p class="text-lead"><h5 class="d-inline">Nombre completo de comprador: </h5>{{ $key->name ." ".$key->surname }}</p>
            <a href="{{ route('sales.sales_index') }}" class="btn btn-sm btn-success">Regresar</a>
          </div>
          <textarea rows="50" disabled class="form-control">{{ $key->paypal_data }}</textarea>
          @endforeach
      </div>
    </div>
  </div>
</main>
@endsection
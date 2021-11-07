@extends('admin.layout')

@section('title','Ventas')

@section('content')
<main class="app-content">
  <div class="app-title">
    <div>
      <h1><i class="fa fa-th-list"></i> Ventas</h1>
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

        <div class="tile-body">
          <div class="table-responsive">
            @if($resultado->isNotEmpty())
            <table class="table table-hover table-bordered" id="sampleTable">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Fecha</th>
                  <th>Payment</th>
                  <th>Descuento</th>
                  <th>Cant_prductos</th>
                  <th>status</th>
                  <th>Usuario </th>
                  <th>Acciones</th>
                </tr>
              </thead>
              <tbody>
                
                @foreach ($resultado  as $sale)
                <tr>
                  <td>{{ $sale->id }}</td>
                  <td>{{ $sale->date }}</td>
                  <td align="right">${{ $sale->payment }}</td>
                  <td align="right">{{ $sale->discount}}</td>
                  <td>{{ $sale->quanty_products}}</td>

                  <td>
                      @if($sale->status ==1)
                          {{ __("Realizado")}}
                     @else
                          {{ __("Pendiente")}}
                              
                      @endif
                    </td>
                  <td>{{ $sale->name ." ". $sale->surname}}</td>
                  <td>
                      <div class="row justify-content-center">
                        <a href="{{ route('sales.show',$sale) }}" class="btn btn-outline-info btn-sm mb-2">Ver</a>
                      </div>
                  </td>
                </tr> 
                @endforeach
              </tbody>
            </table>
            @else
              <h3>No hay ventas registrado en el sistema </h3>
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
@endsection
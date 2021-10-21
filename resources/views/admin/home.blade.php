@extends('admin.layout')

@section('title','Admin | Mi tienda')

@section('content')
<main class="app-content">
  <div class="app-title">
    <div>
      <h1><i class="fa fa-dashboard"></i> Inicio</h1>
      <p>Vista general del sistema</p>
    </div>
    <ul class="app-breadcrumb breadcrumb">
      <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
      <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
    </ul>
  </div>

  
  <div class="row">
    @if (Auth::user()->role_id == 1)  
    <div class="col-md-6 col-lg-3">
      <div class="widget-small primary coloured-icon"><i class="icon fa fa-users fa-3x"></i>
        <div class="info">
          <h4>Usuarios</h4>
          <p><b>{{ $usuariosCantidad }}</b></p>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-lg-3">
      <div class="widget-small warning coloured-icon"><i class="icon fa fa-files-o fa-3x"></i>
        <div class="info">
          <h4>Ventas</h4>
          <p><b>{{ $comprasCantidad }}</b></p>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-lg-3">
      <div class="widget-small danger coloured-icon"><i class="icon fa fa-star fa-3x"></i>
        <div class="info">
          <h4>Productos</h4>
          <p><b>{{ $stock }}</b></p>
        </div>
      </div>
    </div>
    @else
    <div class="col-md-6 col-lg-3">
      <div class="widget-small info coloured-icon"><i class="icon fa fa-box-open fa-3x"></i>
        <div class="info">
          <h4>Productos</h4>
          <p><b>{{ $productCantidad }}</b></p>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-lg-3">
      <div class="widget-small warning coloured-icon"><i class="icon fas fa-box fa-3x"></i>
        <div class="info">
          <h4>Compras</h4>
          <p><b>{{ $comprasCantidad }}</b></p>
        </div>
      </div>
    </div>
    @endif
  </div>


  <div class="row">
    <div class="col-md-6">
      <div class="tile">
        <h3 class="tile-title">Productos categorias</h3>
        <div class="embed-responsive embed-responsive-16by9">
          <canvas class="embed-responsive-item" id="lineChartDemo"></canvas>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="tile">
        <h3 class="tile-title">Estado de compras</h3>
        <div class="embed-responsive embed-responsive-16by9">
          <canvas class="embed-responsive-item" id="pieChartDemo"></canvas>
        </div>
      </div>
    </div>
  </div>
</main>
@endsection
    
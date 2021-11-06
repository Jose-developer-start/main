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
                </tr>
              </thead>
              <tbody>
                
                @foreach ($resultado  as $sale)
                <tr>
                  <td>{{ $sale->id }}</td>
                  <td>{{ $sale->date }}</td>
                  <td>{{ $sale->payment }}</td>
                  <td>{{ $sale->discount}}</td>
                  <td>{{ $sale->quanty_products}}</td>

                  <td>
                      <?php  if($sale->status ==1){
                         echo "Realizada";
                      }
                     else{
                           echo "Pendiente";
                              }
                          ?>
                    </td>
                  <td>{{ $sale->name}}</td>
                  <td>
                      <a href="{{ route('product.edit',$sale) }}" class="btn btn-outline-info btn-sm mb-2">Editar</a>
                      <form action="{{ route('product.destroy',$sale) }}" method="POST">
                        @csrf @method('DELETE')
                        <button type="submit" class="btn btn-outline-danger btn-sm">Eliminar</button>
                      </form>
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
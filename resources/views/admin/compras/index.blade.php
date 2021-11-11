@extends('admin.layout')

@section('title','Productos')

@section('content')
<main class="app-content">
  <div class="app-title">
    <div>
      <h1><i class="app-menu__icon fas fa-box-open"></i> Mis compras</h1>
      <p>Historial de compras</p>
    </div>
    <ul class="app-breadcrumb breadcrumb side">
      <li class="breadcrumb-item"><i class="fas fa-box-open"></i></li>
      <li class="breadcrumb-item">Compras</li>
      <li class="breadcrumb-item active"><a href="#">vista</a></li>
    </ul>
  </div>
  @include('admin.partials.notify')
  <div class="row">
    <div class="col-md-12">
      <div class="tile">
        <div class="mb-3 d-flex justify-content-end">
        </div>
        <div class="tile-body">
          <div class="table-responsive">
            @if ($data->isNotEmpty())
                
            
            <table class="table table-hover table-bordered" id="sampleTable">
              <thead class="table-dark">
                <tr align="center">
                  <th>#</th>
                  <th>Fecha de compra</th>
                  <th>Pago</th>
                  <th>Cant. Productos</th>
                  <th>Estado</th>
                  <th>Facturas</th>
                </tr>
              </thead>
              <tbody>
                  
                  @foreach ($data as $item)
                <tr align="center">
                    <td>{{ $item->id }}</td>
                    <td>{{ date("d-m-Y", strtotime($item->date))}}</td>
                    <td>${{ $item->payment }}</td>
                    <td>{{ $item->quanty_products }}</td>
                    <td>
                      @if ($item->status = 1)
                          {{__('Comprado') }}
                      @else
                        {{__('Pendiente') }}
                      @endif
                    </td>
                    <td><a href="{{ route('factura.compra',$item->id) }}" target="__blank" class="btn btn-info"><i class="far fa-file-pdf fa-2x"></i></a></td>

                </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $data->links() }}
            @else
              <h3>No hay compras registrado en el sistema</h3>
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
@endsection
    
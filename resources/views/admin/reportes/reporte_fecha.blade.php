<h1>Vienvenido</h1>




 @extends('admin.layout')

@section('title','Ventas')

@section('content')
<main class="app-content">

 <div class="app-title">
    <div>
      <h1><i class="fa fa-th-list"></i> Reportes</h1>
      <p>Reportes</p>
    </div>
    <ul class="app-breadcrumb breadcrumb side">
      <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
      <li class="breadcrumb-item">Tables</li>
      <li class="breadcrumb-item active"><a href="#">Data Table</a></li>
    </ul>
  </div>
  @include('admin.partials.notify')
  <div class="row">
    <div class="col-md-12">
       <div class="mb-3 d-flex justify-content">
          <a href="{{ route('reporte.reporte_venta')}} " class="btn btn-success">Regresar</a>
        </div>


      <div class="tile">

        <div class="tile-body">
          <div class="table-responsive">
        @php
            $index = 0;

        @endphp
      <table class="table table-striped" id="table_rep">
            <thead class="">
              <tr>
                <th scope="col">#</th>

  <th scope="col">Precio</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Fecha.</th>
                <th scope="col">Descuento</th>
                <th scope="col">Nombre</th>
                <th scope="col">Cliente </th>
            </thead>
            <tbody>
                @foreach ($fecha as $sale)

                <tr>
                    <th scope="row">{{ $index + 1 }}</th>
                    <td>{{ $sale->unit_price }}</td>
                    <td>{{ $sale->quanty}}</td>
                    <td>{{ $sale->date }}</td>
                    <td>{{ $sale->discount }}</td>
                    <td>{{ $sale->name }}</td>
                      <td>{{ $sale->name_user." ".$sale->surname }}</td>
                </tr>
                @endforeach
            </tbody>
          </table>
                  </div>
        </div>
      </div>
    </div>
  </div>
</main>
@endsection
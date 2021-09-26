@extends('admin.layout')

@section('title','Productos')

@section('content')
<main class="app-content">
  <div class="app-title">
    <div>
      <h1><i class="fa fa-th-list"></i> Data Table</h1>
      <p>Table to display analytical data effectively</p>
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
      <div class="tile">
        <div class="mb-3 d-flex justify-content-end">
          <a href="{{ route('product.create') }}" class="btn btn-success">Agregar</a>
        </div>
        <div class="tile-body">
          <div class="table-responsive">
            <table class="table table-hover table-bordered" id="sampleTable">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Nombre</th>
                  <th>Precio compra</th>
                  <th>Precio venta</th>
                  <th>Descuento</th>
                  <th>Model</th>
                  <th>Acciones</th>
                </tr>
              </thead>
              <tbody>
                
                @foreach ($products as $product)
                <tr>
                  <td>{{ $product->id }}</td>
                  <td>{{ $product->name }}</td>
                  <td>${{ $product->purchase_price }}</td>
                  <td>${{ $product->sale_price }}</td>
                  <td>%{{ $product->discount }}</td>
                  <td>{{ $product->model }}</td>
                  <td>
                      <a href="{{ route('product.edit',$product) }}" class="btn btn-outline-info btn-sm mb-2">Editar</a>
                      <form action="{{ route('product.destroy',$product) }}" method="POST">
                        @csrf @method('DELETE')
                        <button type="submit" class="btn btn-outline-danger btn-sm">Eliminar</button>
                      </form>
                  </td>
                </tr> 
                @endforeach
              </tbody>
            </table>
            {{ $products->links() }}
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
@endsection
    
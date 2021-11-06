@extends('admin.layout')

@section('title','Productos')

@section('content')
<main class="app-content">
  <div class="app-title">
    <div>
      <h1><i class="app-menu__icon fab fa-product-hunt"></i> Productos </h1>
      <p>Table products</p>
    </div>
    <ul class="app-breadcrumb breadcrumb side">
      <li class="breadcrumb-item"> <a href="/mystore" title=""> <i class="fa fa-home fa-lg"></i></a></li>

      <li class="breadcrumb-item active"><a href="{{ route('brands.index_brands') }}">Brands</a></li>
    </ul>
  </div>
  @include('admin.partials.notify')
  <div class="row">
    <div class="col-md-12 "style="color: black;">
      <div class="tile"  style="background-color:#D5D8DC ;">
        <div class="mb-3 d-flex justify-content-right">
          <a href="{{ route('product.create') }}" class="btn btn-success ">Agregar +</a>
        </div>
        <div class="tile-body">
          <div class="table-responsive">
            <table class="table table-hover table-bordered text-center " id="table_id">
              <thead class="table-dark" >
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
                      <a href="{{ route('product.edit',$product) }}" class="btn btn-outline-info btn-sm mb-2"> <span style="font-size: 17px; color:#9BBFF0;">
    <i class="fas fa-pen"></i>
  </span></a>
                      <form action="{{ route('product.destroy',$product) }}" method="POST">
                        @csrf @method('DELETE')
                        <button type="submit" class="btn btn-outline-danger btn-sm"><span style="font-size: 17px; color:red;">
<i class="fas fa-trash"></i>
</span></button>
                      </form>
                  </td>
                </tr> 
                @endforeach
              </tbody>
            </table>
           {{--   {{ $products->links() }}--}}
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
@endsection
    
@extends('admin.layout')

@section('title','Proveedores')

@section('content')
<main class="app-content">
  <div class="app-title">
    <div>
      <h1><i class="app-menu__icon fas fa-people-carry"></i> Supplier</h1>
      <p>supplier</p>
    </div>
    <ul class="app-breadcrumb breadcrumb side">
  <li class="breadcrumb-item"> <a href="/mystore" title=""> <i class="fa fa-home fa-lg"></i></a></li>

       <li class="breadcrumb-item active"><a href=" {{route('product.index') }}">Products</a></li>
    </ul>
  </div>
  @include('admin.partials.notify')
  <div class="row">
    <div class="col-md-12" style="color: black;">
      <div class="tile"  style="background-color:#D5D8DC" >
        <div class="mb-3 d-flex justify-content-right">
          <a href="{{ route('suplier.create') }}" class="btn btn-success">Agregar +</a>
        </div>
        <div class="tile-body">
          <div class="table-responsive">
            <table class="table table-hover table-bordered text-center" id="table_proveedor">
              <thead class="table-dark">
                <tr>
                  <th>#</th>
                  <th>Nombre</th>
                  <th>Direccion</th>
                  <th>Telefono</th>
                  <th>Imagen</th>
                  <th>Acciones</th>
                </tr>
              </thead>
              <tbody>
                
                @foreach ($suppliers as $supplier)
                <tr>
                  <td>{{ $supplier->id }}</td>
                  <td>{{ $supplier->name }}</td>
                  <td>{{ $supplier->direction }}</td>
                  <td>{{ $supplier->phone }}</td>
                  <td>  <img class="card-img" style="width:130px; height:80px; " src="{{ asset('storage/'.$supplier->image)}}" alt="">

                  </td>
                  <td >
                      <div class="row justify-content-center">
                        <a href="{{ route('suplier.edit',$supplier) }}" class="btn btn-outline-info btn-sm mb-2 mx-2"><span style="font-size: 14px; color:#9BBFF0;">
                          <i class="fas fa-pen"></i>
                        </span></a>
                                            <form action="{{ route('suplier.destroy',$supplier) }}" method="POST">
                                              @csrf @method('DELETE')
                                              <button type="submit" class="btn btn-outline-danger btn-sm"><span style="font-size: 14px; color:red;">
                      <i class="fas fa-trash"></i>
                      </span></button>
                                            </form>
                      </div>
                  </td>
                </tr> 
                @endforeach
              </tbody>
            </table>
           {{-- {{ $suppliers->links()}} --}}
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
@endsection
    
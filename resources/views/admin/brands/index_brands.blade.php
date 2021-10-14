@extends('admin.layout')

@section('title','Marcas')

@section('content')
<main class="app-content">
  <div class="app-title">
    <div>
      <h1><i class="fa fa-th-list"></i>  Table  brands</h1>
      <p>Table the brands</p>
    </div>
    <ul class="app-breadcrumb breadcrumb side">
      <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
      <li class="breadcrumb-item">Tables</li>
      <li class="breadcrumb-item active"><a href="#">brands Table</a></li>
    </ul>
  </div>
  @include('admin.partials.notify')
  <div class="row">
    <div class="col-md-12">
      <div class="tile">
        <div class="mb-3 d-flex justify-content-right">
          <a href="{{ route('brands.create_brands')}} " class="btn btn-success">Agregar +</a>
        </div>
        <div class="tile-body">
          <div class="table-responsive">
            <table class="table table-hover table-bordered text-center  " id="sampleTable">
              <thead class="table-dark">
                <tr>
                  <th>#</th>
                  <th>Nombre</th>
                  <th>Acciones</th>
                </tr>
              </thead> 
              <tbody>
                
                @foreach ($brands as $brand)
                <tr>
                  <td class="table-light">{{ $brand->id }}</td>
                  <td class="table-light">{{ $brand->brand_name }}</td>
                  <td class="table-light">
                      <a href="{{ route('brands.edit',$brand) }}" class="btn btn-outline-info btn-sm mb-2">Modificar</a>
                      <form action="{{ route('brands.destroy',$brand) }}" method="POST">
                        @csrf @method('DELETE')
                        <button type="submit" class="btn btn-outline-danger btn-sm mb-2 ">Eliminar</button>
                      </form>
                  </td>
                </tr> 
                @endforeach
              </tbody>
            </table>
            {{ $brands->links()}}
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
@endsection
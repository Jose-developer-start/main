@extends('admin.layout')

@section('title','Categorias')

@section('content')
<main class="app-content">
  <div class="app-title">
    <div>
      <h1><i class="fa fa-th-list"></i>  Table category</h1>
      <p>Table the category</p>
    </div>
    <ul class="app-breadcrumb breadcrumb side">
      <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
      <li class="breadcrumb-item">Tables</li>
      <li class="breadcrumb-item active"><a href="#">Categories Table</a></li>
    </ul>
  </div>
  @include('admin.partials.notify')
  <div class="row">
    <div class="col-md-12">
      <div class="tile">
        <div class="mb-3 d-flex justify-content-right">
          <a href="{{ route('category.create_category') }}" class="btn btn-success">Agregar +</a>
        </div>
        <div class="tile-body">
          <div class="table-responsive">
            <table class="table table-hover table-bordered text-center  " id="sampleTable">
              <thead class="table-dark">
                <tr>
                  <th>#</th>
                  <th>Nombre</th>
                  <th>Imagen</th>
                  <th>Acciones</th>
                </tr>
              </thead> 
              <tbody>
                
                @foreach ($categories as $category)
                <tr>
                  <td class="table-light">{{ $category->id }}</td>
                  <td class="table-light">{{ $category->name }}</td>
                  <td class="table-light">  <img class="card-img" style="width:130px; height:80px; " src="{{ asset('storage/'.$category->image)}}" alt="">

                  </td >
                  <td class="table-light">
                      <a href="{{ route('category.edit',$category) }}" class="btn btn-outline-info btn-sm mb-2">Modificar</a>
                      <form action="{{ route('category.destroy',$category) }}" method="POST">
                        @csrf @method('DELETE')
                        <button type="submit" class="btn btn-outline-danger btn-sm mb-2 ">Eliminar</button>
                      </form>
                  </td>
                </tr> 
                @endforeach
              </tbody>
            </table>
            {{ $categories->links()}}
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
@endsection
@extends('admin.layout')

@section('title','Productos')

@section('content')
<main class="app-content">
  <div class="app-title">
    <div>
      <h1><i class="fa fa-th-list"></i> Roles/s</h1>
      <p>Administración de roles</p>
    </div>
    <ul class="app-breadcrumb breadcrumb side">
      <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
      <li class="breadcrumb-item">Roles</li>
      <li class="breadcrumb-item active"><a href="#">vista</a></li>
    </ul>
  </div>
  @include('admin.partials.notify')
  <div class="row">
    <div class="col-md-12">
      <div class="tile">
        <div class="mb-3 d-flex justify-content-end">
          <a href="{{ route('rol.create') }}" class="btn btn-success">Agregar</a>
        </div>
        <div class="tile-body">
          <div class="table-responsive">
            <table class="table table-hover table-bordered" id="sampleTable">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Nombre de roles</th>
                  <th>Acciones</th>
                </tr>
              </thead>
              <tbody>
                
                @foreach ($rols as $rol)
                <tr>
                  <td>{{ $rol->id }}</td>
                  <td>{{ $rol->name }}</td>
                  <td>
                      <div class="d-flex justify-content-center">
                        <a href="{{ route('rol.edit',$rol) }}" class="btn btn-outline-info mb-2 mx-3">Editar</a>
                      <form action="{{ route('rol.destroy',$rol->id) }}" method="POST">
                        @csrf @method('DELETE')
                        <button type="submit" class="btn btn-outline-danger">Eliminar</button>
                      </form>
                      </div>
                  </td>
                </tr> 
                @endforeach
              </tbody>
            </table>
            {{ $rols->links() }}
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
@endsection
    
@extends('admin.layout')

@section('title','Roles')

@section('content')
<main class="app-content">
  <div class="app-title">
    <div>
      <h1><i class="app-menu__icon fas fa-key"></i> Roles/s</h1>
      <p>Administración de roles</p>
    </div>
    <ul class="app-breadcrumb breadcrumb side">
       <li class="breadcrumb-item"> <a href="/mystore" title=""> <i class="fa fa-home fa-lg"></i></a></li>
      <li class="breadcrumb-item">Roles</li>
      <li class="breadcrumb-item active"><a href="{{ route('user.index') }}">Users</a></li>
    </ul>
  </div>
  @include('admin.partials.notify')
  <div class="row">
    <div class="col-md-12" style="color: black;">
      <div class="tile" style="background-color:#D5D8DC ;">
        <div class="mb-3 d-flex justify-content-right">
          <a href="{{ route('rol.create') }}" class="btn btn-success">Agregar +</a>
        </div>
        <div class="tile-body">
          <div class="table-responsive">
            <table class="table table-hover table-bordered text-center" id="sampleTable">
              <thead  class="table-dark">
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
                        <a href="{{ route('rol.edit',$rol) }}" class="btn btn-outline-info mb-2 mx-3"><span style="font-size: 14px; color:#9BBFF0;">
    <i class="fas fa-pen"></i>
  </span></a>
                      <form action="{{ route('rol.destroy',$rol->id) }}" method="POST">
                        @csrf @method('DELETE')
                        <button type="submit" class="btn btn-outline-danger"><span style="font-size: 14px; color:red;">
<i class="fas fa-trash"></i>
</span></button>
                      </form>
                      </div>
                  </td>
                </tr> 
                @endforeach
              </tbody>
            </table>
       {{--  {{ $rols->links() }} --}}
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
@endsection
    
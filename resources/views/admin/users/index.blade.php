@extends('admin.layout')

@section('title','Productos')

@section('content')
<main class="app-content">
  <div class="app-title">
    <div>
      <h1><i class="fa fa-th-list"></i> Usuario/s</h1>
      <p>Tu datos</p>
    </div>
    <ul class="app-breadcrumb breadcrumb side">
      <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
      <li class="breadcrumb-item">Usuario</li>
      <li class="breadcrumb-item active"><a href="#">Data Table</a></li>
    </ul>
  </div>
  @include('admin.partials.notify')
  <div class="row">
    <div class="col-md-12">
      <div class="tile">
        <div class="mb-3 d-flex justify-content-end">
          <a href="{{ route('user.create') }}" class="btn btn-success">Agregar</a>
        </div>
        <div class="tile-body">
          <div class="table-responsive">
            <table class="table table-hover table-bordered" id="sampleTable">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Nombre completo</th>
                  <th>Email</th>
                  <th>Dirección</th>
                  <th>Rol</th>
                  <th>Acciones</th>
                </tr>
              </thead>
              <tbody>
                
                @foreach ($users as $user)
                <tr>
                  <td>{{ $user->id }}</td>
                  <td>{{ $user->name." ".$user->surname }}</td>
                  <td>{{ $user->email }}</td>
                  <td>{{ $user->direction }}</td>
                  <td>{{ $user->role->name }}</td>
                  <td>
                      <div class="d-flex justify-content-center">
                        <a href="{{ route('user.edit',$user) }}" class="btn btn-outline-info btn-sm mb-2 mx-3">Editar</a>
                      <form action="{{ route('user.destroy',$user) }}" method="POST">
                        @csrf @method('DELETE')
                        <button type="submit" class="btn btn-outline-danger btn-sm">Eliminar</button>
                      </form>
                      </div>
                  </td>
                </tr> 
                @endforeach
              </tbody>
            </table>
            {{ $users->links() }}
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
@endsection
    
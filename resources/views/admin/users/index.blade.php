@extends('admin.layout')

@section('title','Users')

@section('content')
<main class="app-content">
  <div class="app-title">
    <div>
      <h1><i class="app-menu__icon fa fa-users"></i> User/s</h1>
      <p>users</p>
    </div>
    <ul class="app-breadcrumb breadcrumb side">
      <li class="breadcrumb-item"> <a href="/mystore" title=""> <i class="fa fa-home fa-lg"></i></a></li>

    <li class="breadcrumb-item active"><a href=" {{route('product.index') }}">Products</a></li>
    </ul>
  </div>
  @include('admin.partials.notify')
  <div class="row">
    <div class="col-md-12" style="color: black;" >
      <div class="tile" style="background-color:#D5D8DC ;" >
        <div class="mb-3 d-flex justify-content-right">
          <a href="{{ route('user.create') }}" class="btn btn-success">Agregar</a>
        </div>
        <div class="tile-body">
          <div class="table-responsive">
            <table class="table table-hover table-bordered text-center" id="table_usuarios">
              <thead class="table-dark"  >
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
                        <a href="{{ route('user.edit',$user) }}" class="btn btn-outline-info btn-sm mb-2 mx-3"> <span style="font-size: 14px; color:#9BBFF0;">
    <i class="fas fa-pen"></i>
  </span></a>
                      <form action="{{ route('user.destroy',$user) }}" method="POST">
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
           {{--  {{ $users->links() }} --}}
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
@endsection
    
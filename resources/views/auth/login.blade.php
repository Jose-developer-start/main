@extends('layouts.app')

@section('content')
    <!-- boton flotante de whatsapp-->
    <a class="float"
        href="https://api.whatsapp.com/send?phone=50371381006&text=Hola,%20bienvenidos%20a%20nuestro%20%20WhasatsApp,%20realiza%20tu%20consuta,%20te%20atenderemos%20rapidamente."
        target="_blank">
        <i class="fab fa-whatsapp my-float fa-1x">
        </i>
    </a>
    <!-- ceramos el  flotante de whatsapp-->
    <div class="col-md-4 offset-md-4 my-4">
        <div class="card">
            <div class="card-header">
                <h3>Ingresar</h3>
            </div>
            <div class="card-body">
                <form action="" method="POST">
                    @csrf
                    <div class="mb-3">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Email</span>
                            </div>
                            <input type="text" name="email" class="form-control @error('email') is-invalid @enderror"
                                placeholder="Correo" value="{{ old('email') }}" aria-label="Username"
                                aria-describedby="basic-addon1">
                        </div>
                        {!! $errors->first('email', '<span class="error">:message</span>') !!}
                    </div>
                    <div class="mb-3">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Clave</span>
                            </div>
                            <input type="password" name="password"
                                class="form-control @error('password') is-invalid @enderror" placeholder="Clave"
                                value="{{ old('password') }}" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        {!! $errors->first('password', '<span class="error">:message</span>') !!}
                    </div>
                    <button class="btn btn-outline-success btn-block">Ingresar</button>
                </form>
                @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Olvidades tu contraseña?') }}
                    </a>
                @endif
            </div>
        </div>
    </div>
    @if (session('updated-password'))
        <script>
            //alertify.success('Bienvenido a la tienda');
            swal("Tu contraseña se ha modificado!!", "Inicia sesión nuevamente", "success");
        </script>
    @endif
@endsection

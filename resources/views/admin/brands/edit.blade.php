@extends('admin.layout')

@section('title', 'Marcas/Agregar')

@section('content')
    <main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="fa fa-th-list"></i>Marcas</h1>
                <p>Editar Marca</p>
            </div>
            <ul class="app-breadcrumb breadcrumb side">
                <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                <li class="breadcrumb-item">Marcas</li>
                <li class="breadcrumb-item active"><a href="{{ route('brands.create_brands') }} ">Agregar Marca</a></li>
            </ul>
        </div>
        @include('admin.partials.notify')
        <div class="row">
            <div class="col-md-12">
                <div class="tile m-3">
                    <form class="text-center" action="{{ route('brands.update', $brand) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf @method('PUT')
                        @include('admin.brands._form_brands')
                        <div class="tile-footer">
                            <button class="btn btn-primary" type="submit">Actualizar</button>
                            <a href="{{ route('brands.index_brands') }}" class="btn btn-outline-danger">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection

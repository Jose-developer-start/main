@extends('admin.layout')

@section('title', 'Productos/Agregar')

@section('content')
    <main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="fa fa-th-list"></i> Proveedores</h1>
                <p>Table to display analytical data effectively</p>
            </div>
            <ul class="app-breadcrumb breadcrumb side">
                <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                <li class="breadcrumb-item">Proveedor</li>
                <li class="breadcrumb-item active"><a href="#">Crear</a></li>
            </ul>
        </div>
        @include('admin.partials.notify')
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <form class="text-center" action="{{ route('suplier.store') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @include('admin.suplier._form')
                        <div class="tile-footer">
                            <button class="btn btn-primary" type="submit">Agregar Proveedor</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection

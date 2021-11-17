@extends('layouts.app')

@section('title', " {$product->name} ")

@section('content')
    <!-- boton flotante de whatsapp-->
    <a class="float"
        href="https://api.whatsapp.com/send?phone=50371381006&text=Hola,%20bienvenidos%20a%20nuestro%20%20WhasatsApp,%20realiza%20tu%20consuta,%20te%20atenderemos%20rapidamente."
        target="_blank">
        <i class="fab fa-whatsapp my-float fa-1x">
        </i>
    </a>
    <!-- ceramos el  flotante de whatsapp-->

    <div class="container mb-4">
        <nav aria-label="breadcrumb" style="margin-top: 60px">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Tecnlogy BOX</a></li>
                <li class="breadcrumb-item active" aria-current="page">Producto</li>
                <li class="breadcrumb-item active" aria-current="page">Ver</li>
            </ol>
        </nav>


        <div class="row">
            <div class="col-12 col-sm-12 col-md-6">
                <div class="d-flex justify-content-center">
                    <img class="product-item-img" src="{{ asset('storage/' . $product->image) }}" alt="">
                </div>
            </div>

            <div class="col-12 col-sm-12 col-md-6 product-details">
                <h1 class="text-center mb-2" style="color: #333e48; font-size: 1.5rem">Especificaciones: </h1>
                <h2 class="product-item-title">{{ $product->name }}</h2>
                <h3 class="product-item-detail">{{ $product->description }}</h3>
                <h5>Marca: {{ $product->brand->brand_name }}</h5>
                <h5>Modelo: {{ $product->model }}</h5>
                <h5>Proveedor: {{ $product->supplier->name }}</h5>
                <p class="text-lead">Existencia: {!! $product->stock->stock > 0 ? '<span style="color: #198754; font-size: 1rem">' . $product->stock->stock . '</span>' : '<span>No hay existencia de este producto en nuestras tiendas</span>' !!}</p>

                @if ($product->discount > 0)
                    <span class="old-price">${{ $product->sale_price }}</span>
                    <span class="price"><b>
                            ${{ calPercentaje($product->discount, $product->sale_price) }}
                        </b></span>
                @else
                    <span class="old-price">-</span>
                    <span class="price"><b>${{ $product->sale_price }}</b></span>

                @endif
                <form action="{{ route('cart.store') }}" method="POST">
                    {{ csrf_field() }}
                    <input type="hidden" value="{{ $product->id }}" id="id" name="id">
                    <input type="hidden" value="{{ $product->name }}" id="name" name="name">
                    <input type="hidden" value="{{ $product->description }}" id="details" name="details">
                    @if ($product->discount > 0)
                        <input type="hidden" value="{{ calPercentaje($product->discount, $product->sale_price) }}"
                            id="price" name="price">
                    @else
                        <input type="hidden" value="{{ $product->sale_price }}" id="price" name="price">
                    @endif
                    <input type="hidden" value="{{ $product->image }}" id="image" name="image">
                    <input type="hidden" value="1" id="quantity" name="quantity">

                    <button data-container="body" data-toggle="popover" data-placement="bottom"
                        data-content="Agregar a tus compras" {{ $product->stock->stock > 0 ? '' : 'disabled' }}
                        class="btn btn-success btn-block my-3" class="tooltip-test" title="add to cart">
                        <i class="fa fa-shopping-cart"></i> Agregar
                    </button>
                </form>
            </div>
        </div>

    </div>
@endsection

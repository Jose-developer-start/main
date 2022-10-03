@extends('layouts.app')

@section('title','Technology Box')

@section('content')
 <!-- boton flotante de whatsapp-->
 <a class="float"
 href="https://api.whatsapp.com/send?phone=50371381006&text=Hola,%20bienvenidos%20a%20nuestro%20%20WhasatsApp,%20realiza%20tu%20consuta,%20te%20atenderemos%20rapidamente."
 target="_blank">
 <i class="fab fa-whatsapp my-float fa-1x">
 </i>
</a>
<!-- ceramos el  flotante de whatsapp-->
<header>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{asset('images/slider1.jpg')}}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{asset('images/slider2.jpg')}}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{asset('images/slider3.jpg')}}" class="d-block w-100" alt="...">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
</header>
<!-- boton flotante de whatsapp-->
<a class="float" href="https://api.whatsapp.com/send?phone=50371381006&text=Hola,%20bienvenidos%20a%20nuestro%20%20WhasatsApp,%20realiza%20tu%20consuta,%20te%20atenderemos%20rapidamente." target="_blank">
    <i class="fab fa-whatsapp my-float fa-1x">
    </i>
</a>
<!-- ceramos el  flotante de whatsapp-->
<div class="container">
  <section>
    <h2 class="p-3 text-center">Comprar por categoria</h2>
    <div class="row">
        @foreach ($categories as $category)
        <div class="col-6 col-sm-6 col-md-2 mb-3">
            <a href="{{ route('main.productos',$category->name) }}">
                <div class="card">
                    <div class="m-auto">
                        <img class="img-thumbnail" src="{{ asset('storage/'.$category->image) }}" alt="">
                    </div>
                    <div class="card-body">
                        <h6 class="text-center">{{ $category->name }}</h6>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</section>
<section class="container-fluid">
    <h2 class="text-center p-3">Nuevos productos</h2>
    <div class="row">
        
        @foreach ($products as $product)
        
        @if ($product->stock->status != 0)
        
        <div class="col-6 col-md-3 col-lg-3">
            <div class="card border-0 mb-3">
                @if($product->discount > 0)
                <span class="ml-2 p-2 card-ofert">En oferta</span>
                @endif
                <div class="m-auto">
                    <img class="card-img" style="width: 100%" src="{{asset('storage/'.$product->image)}}" alt="">
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{ $product->name }}</h5>
                    <p class="card-description">{{ $product->description }}</p>
                    @if($product->discount > 0)
                    <span class="old-price">${{ $product->sale_price }}</span>
                    <span class="price"><b>
                        ${{ calPercentaje($product->discount,$product->sale_price) }}
                    </b></span>
                    @else
                    <span class="old-price">-</span>
                    <span class="price"><b>${{ $product->sale_price }}</b></span>

                    @endif
                </div>
                <div class="card-footer border-0 d-flex justify-content-between">
                    <form action="{{ route('cart.store') }}" method="POST">
                        {{ csrf_field() }}
                        <input type="hidden" value="{{ $product->id }}" id="id" name="id">
                        <input type="hidden" value="{{ $product->name }}" id="name" name="name">
                        <input type="hidden" value="{{ $product->description }}" id="details" name="details">
                        
                        @if($product->discount > 0)
                        <input type="hidden" value="{{ calPercentaje($product->discount,$product->sale_price) }}" id="price" name="price">
                        @else
                        <input type="hidden" value="{{ $product->sale_price }}" id="price" name="price">
                        @endif

                        <input type="hidden" value="{{ $product->image }}" id="image" name="image">
                        <input type="hidden" value="1" id="quantity" name="quantity">
                        <button {{ $product->stock->stock > 0 ? '' : 'disabled' }} class="btn btn-outline-secondary btn-sm btn-md" class="tooltip-test" title="add to cart">
                            <i class="fa fa-shopping-cart"></i> Agregar
                        </button>
                    </form>
                    <a href="{{ route('showProduct',$product->name) }}" class="btn btn-yellow btn-sm">
                        Ver más
                    </a>
                </div>
            </div>
        </div>

        @endif

        @endforeach
    </div>
</section>

<section class="section-desing">
<div class="container">
<div class="row">
    <div class="text-center pb-3 pt-3 ">
        <h2 class="text-center pb-2 pt-2 h3 size-letra">
            Las mesjores Marcas.
        </h2>
        <p class="size-parrafo">

 La tecnología avanza muy rápido, por eso los productos que ofrece Technology Box, tenemos las marcas más reconocidas Y mejores en tecnología.

        </p>
    </div>
    <!-- TARJETA-1 -->
    <div class="col-12 col-md-6 col-lg-4 d-flex flex-column align-items-center p-2">
        <div class="card card-border boreder-radio" style="width: 18rem;">
            <img alt="..." class="card-img-top size-imagen" src="{{asset('images/proveedores/nautica.png')}}">

        </div>
    </div>
    <!-- TARJETA-3 -->
    <div class="col-12 col-md-6 col-lg-4 d-flex flex-column align-items-center p-3">
        <div class="card card-border boreder-radio" style="width: 18rem;">
            <img alt="..." class="card-img-top size-imagen" src="{{asset('images/proveedores/nike.png')}}">

        </div>
    </div>
    <!-- TARJETA-3 -->
    <div class="col-12 col-md-12 col-lg-4 d-flex flex-column align-items-center p-3">
        <div class="card card-border boreder-radio" style="width: 18rem;">
            <img alt="..." class="card-img-top size-imagen" src="{{asset('images/proveedores/polo.png')}}">

        </div>
    </div>
    <div class="col-12 col-md-12 col-lg-4 d-flex flex-column align-items-center p-3">
        <div class="card card-border boreder-radio" style="width: 18rem;">
            <img alt="..." class="card-img-top size-imagen" src="{{asset('images/proveedores/puma.png')}}">

        </div>
    </div>
</div>
</div>
</section>
<section class="section-desing" id="personas">
<div class="container pt-2">
<div class="contenedor1">
    <div class="triangulo">
        <div class="div1_1">
            <div>
            </div>
            <h2>
           Historia
            </h2>

            <p>
                <span style="font-size: 42px; color: blue;"> <b> 10 </b>  </span>  Años de experiencia en la venta de dispositivos informáticos y artículos tecnológicos de oficina, hogar, escolar, entretenimiento, satisfaciendo las necesidades de los clientes.
            </p>
          <a href=" {{ route('main.nosotros') }}" title="" class="btn btn-outline-info"> Ver mas</a>
        </div>
        <div class="div1">
            <div class="div1-1">
                <div class="div2">
                    <img src="{{asset('images/nosotros/dispositivos.jpg')}}">

                </div>
                <div class="div3">
                    <img src="{{asset('images/nosotros/electronicos2.jpg')}}">

                </div>
            </div>
        </div>
    </div>
</div>
</section>
<section class="container bg-newsletter mb-3">
    <h2 class="text-center p-3">Enterate de las novedades</h2>
    <div class="row">
        <div class="col-12 col-sm-12 col-md-6">
            <p class="text-sm-center">Suscribte y entérate primero de todas las promociones y novedades</p>
        </div>
        <div class="col-12 col-sm-12 col-md-6">
            <div class="form-group row">
                <input class="form-control col-md-8" type="text">
                <button class="btn btn-outline-info btn-sm">Enviar</button>
            </div>
        </div>
    </div>
</section>
</div>
@if (session('register-new'))
    <script>
        //alertify.success('Bienvenido a la tienda');
        swal("Bienvenido/a <?= Auth::user()->name.' '.Auth::user()->surname ?>", "Gracias por ser parte de Technology box!!", "success");
    </script>
@endif
@endsection
@extends('layouts.app')

@section('content')
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
  <div class="container">
      
  <section class="container-fluid">
    <h2 class="p-3 text-center">Comprar por categoria</h2>
    <div class="row">
        <div class="col-6 col-sm-6 col-md-2 mb-3">
            <a href="">
                <div class="card">
                    <div class="m-auto">
                        <img src="./image/1.png" alt="">
                    </div>
                    <div class="card-body">
                        <h4 class="text-center">Pantallas</h4>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-6 col-sm-6 col-md-2 mb-3">
            <a href="">
                <div class="card">
                    <div class="m-auto">
                        <img src="./image/1.png" alt="">
                    </div>
                    <div class="card-body">
                        <h4 class="text-center">Pantallas</h4>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-6 col-sm-6 col-md-2 mb-3">
            <a href="">
                <div class="card">
                    <div class="m-auto">
                        <img src="./image/1.png" alt="">
                    </div>
                    <div class="card-body">
                        <h4 class="text-center">Pantallas</h4>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-6 col-sm-6 col-md-2 mb-3">
            <a href="">
                <div class="card">
                    <div class="m-auto">
                        <img src="./image/1.png" alt="">
                    </div>
                    <div class="card-body">
                        <h4 class="text-center">Pantallas</h4>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-6 col-sm-6 col-md-2 mb-3">
            <a href="">
                <div class="card">
                    <div class="m-auto">
                        <img src="./image/1.png" alt="">
                    </div>
                    <div class="card-body">
                        <h4 class="text-center">Pantallas</h4>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-6 col-sm-6 col-md-2 mb-3">
            <a href="">
                <div class="card">
                    <div class="m-auto">
                        <img src="./image/1.png" alt="">
                    </div>
                    <div class="card-body">
                        <h4 class="text-center">Pantallas</h4>
                    </div>
                </div>
            </a>
        </div>
    </div>
</section>
<section class="container-fluid">
    <h2 class="text-center p-3">Nuevos productos</h2>
    <div class="row">
        @foreach ($products as $product)
        <div class="col-6 col-md-3 col-lg-3">
            <div class="card border-0 mb-3">
                <span class="ml-2 p-2 card-ofert">Oferta</span>
                <div class="m-auto">
                    <img class="card-img" src="{{asset('images/1.jpg')}}" alt="">
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{ $product->name }}</h5>
                    <p class="card-description">{{ $product->description }}</p>
                    <span class="old-price">{{ $product->sale_price - 20 }}</span>
                    <span class="price"><b>{{ $product->sale_price }}</b></span>
                </div>
                <div class="card-footer border-0 d-flex justify-content-between">
                    <button class="btn btn-yellow btn-sm btn-md btn-lg">
                        Carrito
                    </button>
                    <button class="btn btn-yellow btn-sm-none">
                        Comprar
                    </button>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>
<section class="container-fluid">
    <h2 class="text-center p-3">Nuestras marcas</h2>
    <div class="row">
        <div class="col-12 col-sm-12 col-md-4 mb-3">
            <img class="img-thumbnail" src="{{asset('images/lg.png')}}" alt="">
        </div>
        <div class="col-12 col-sm-12 col-md-4 mb-3">
            <img class="img-thumbnail" src="{{asset('images/lg.png')}}" alt="">
        </div>
        <div class="col-12 col-sm-12 col-md-4 mb-3">
            <img class="img-thumbnail" src="{{asset('images/lg.png')}}" alt="">
        </div>
    </div>
</section>
<section class="container-fluid bg-newsletter mb-3">
    <h2 class="text-center p-3">Enterate de las novedades</h2>
    <div class="row">
        <div class="col-12 col-sm-12 col-md-6">
            <p class="text-sm-center">Suscribte y entérate primero de todas las promociones y novedades</p>
        </div>
        <div class="col-12 col-sm-12 col-md-6">
            <div class="form-group row">
                <input class="form-control col-md-8" type="text">
                <button class="btn btn-outline-info">Enviar</button>
            </div>
        </div>
    </div>
</section>
  </div>

@endsection
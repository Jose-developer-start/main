@extends('layouts.app')

@section('title','productos')

@section('content')
<div class="container" style="margin-top: 60px">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Tecnlogy BOX</a></li>
            <li class="breadcrumb-item active" aria-current="page">Productos</li>
        </ol>
    </nav>
    <h1 class="text-center p-4">Compra los mejores productos</h1>
    <div class="d-flex justify-content-center mb-4">
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle btn" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Buscar por categoria
                </a> 
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    @foreach ($categories as $category)
                    <a class="dropdown-item" href="{{ route('main.productos',$category->name) }}">{{ $category->name }}</a>
                    @endforeach
                </div>
              </li>
        </ul>
    </div>
    <div class="row">
        @forelse ($products as $product)
        <div class="col-6 col-md-3 col-lg-3">
            <div class="card border-0 mb-3">
                <span class="ml-2 p-2 card-ofert">Oferta</span>
                <div class="m-auto">
                    <img class="card-img" src="{{asset('images/'.$product->image)}}" alt="">
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{ $product->name }}</h5>
                    <p class="card-description">{{ $product->description }}</p>
                    <span class="old-price">$25</span>
                    <span class="price"><b>${{ $product->sale_price }}</b></span>
                </div>
                <div class="card-footer border-0 d-flex justify-content-between">
                    <form action="{{ route('cart.store') }}" method="POST">
                        {{ csrf_field() }}
                        <input type="hidden" value="{{ $product->id }}" id="id" name="id">
                        <input type="hidden" value="{{ $product->name }}" id="name" name="name">
                        <input type="hidden" value="{{ $product->description }}" id="details" name="details">
                        <input type="hidden" value="{{ $product->sale_price }}" id="price" name="price">
                        <input type="hidden" value="{{ $product->image }}" id="image" name="image">
                        <input type="hidden" value="1" id="quantity" name="quantity">
                        <button class="btn btn-outline-secondary btn-sm btn-md" class="tooltip-test" title="add to cart">
                            <i class="fa fa-shopping-cart"></i> Agregar
                        </button>
                    </form>
                    <a href="{{ route('showProduct',$product->name) }}" class="btn btn-yellow btn-sm">
                        Ver más
                    </a>
                </div>
            </div>
        </div>
        @empty
        <div class="mx-auto mb-md-4 text-center">
            <h4>No hay productos en esta categoria</h4><br>
            <a href="/productos" class="btn btn-dark">Ver todos</a>
        </div>
        @endforelse
    </div>
    <div class="d-flex justify-content-end">
        {{ $products->links() }}
    </div>
</div>
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
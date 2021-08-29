@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <h1 class="text-center p-4">Compra los mejores productos</h1>
    <div class="d-flex justify-content-center mb-4">
        <form class="form-inline my-2 my-lg-0">
            <select name="" id="" class="form-control mx-sm-2 my-lg-0">
                <option value="">Pantallas</option>
            </select>
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
        </form>
    </div>
    <div class="row">
        <div class="col-6 col-md-3 col-lg-3">
            <div class="card border-0 mb-3">
                <span class="ml-2 p-2 card-ofert">Oferta</span>
                <div class="m-auto">
                    <img class="card-img" src="{{asset('images/mouse.png')}}" alt="">
                </div>
                <div class="card-body">
                    <h5 class="card-title">Microsoft</h5>
                    <p class="card-description">Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                    <span class="old-price">$25</span>
                    <span class="price"><b>$22</b></span>
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
        <div class="col-6 col-md-3 col-lg-3">
            <div class="card border-0 mb-3">
                <span class="ml-2 p-2 card-ofert">Oferta</span>
                <div class="m-auto">
                    <img class="card-img" src="{{asset('images/mouse.png')}}" alt="">
                </div>
                <div class="card-body">
                    <h5 class="card-title">Microsoft</h5>
                    <p class="card-description">Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                    <span class="old-price">$25</span>
                    <span class="price"><b>$22</b></span>
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
        <div class="col-6 col-md-3 col-lg-3">
            <div class="card border-0 mb-3">
                <span class="ml-2 p-2 card-ofert">Oferta</span>
                <div class="m-auto">
                    <img class="card-img" src="{{asset('images/mouse.png')}}" alt="">
                </div>
                <div class="card-body">
                    <h5 class="card-title">Microsoft</h5>
                    <p class="card-description">Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                    <span class="old-price">$25</span>
                    <span class="price"><b>$22</b></span>
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
        <div class="col-6 col-md-3 col-lg-3">
            <div class="card border-0 mb-3">
                <span class="ml-2 p-2 card-ofert">Oferta</span>
                <div class="m-auto">
                    <img class="card-img" src="{{asset('images/1.jpg')}}" alt="">
                </div>
                <div class="card-body">
                    <h5 class="card-title">Microsoft</h5>
                    <p class="card-description">Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                    <span class="old-price">$25</span>
                    <span class="price"><b>$22</b></span>
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